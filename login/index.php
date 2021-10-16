<?php

use Firebase\JWT\JWT;

header('Access-Control-Allow-Origin: http://127.0.0.1:8000');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: content-type,x-xsrf-token,x-requested-with');
header('Access-Control-Allow-Credentials: true');

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Main login page.
 *
 * @package    core
 * @subpackage auth
 * @copyright  1999 onwards Martin Dougiamas  http://dougiamas.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../config.php');
require_once('lib.php');

redirect_if_major_upgrade_required();

$testsession = optional_param('testsession', 0, PARAM_INT); // test session works properly
$anchor      = optional_param('anchor', '', PARAM_RAW);     // Used to restore hash anchor to wantsurl.

$resendconfirmemail = optional_param('resendconfirmemail', false, PARAM_BOOL);

// It might be safe to do this for non-Behat sites, or there might
// be a security risk. For now we only allow it on Behat sites.
// If you wants to do the analysis, you may be able to remove the
// if (BEHAT_SITE_RUNNING).
if (defined('BEHAT_SITE_RUNNING') && BEHAT_SITE_RUNNING) {
    $wantsurl    = optional_param('wantsurl', '', PARAM_LOCALURL);   // Overrides $SESSION->wantsurl if given.
    if ($wantsurl !== '') {
        $SESSION->wantsurl = (new moodle_url($wantsurl))->out(false);
    }
}

$context = context_system::instance();
$PAGE->set_url("$CFG->wwwroot/login/index.php");
$PAGE->set_context($context);
$PAGE->set_pagelayout('login');

/// Initialize variables
$errormsg = '';
$errorcode = 0;

// login page requested session test
if ($testsession) {
    if ($testsession == $USER->id) {
        if (isset($SESSION->wantsurl)) {
            $urltogo = $SESSION->wantsurl;
        } else {
            $urltogo = $CFG->wwwroot.'/';
        }
        unset($SESSION->wantsurl);
        redirect($urltogo);
    } else {
        // TODO: try to find out what is the exact reason why sessions do not work
        $errormsg = get_string("cookiesnotenabled");
        $errorcode = 1;
    }
}

/// Check for timed out sessions
if (!empty($SESSION->has_timed_out)) {
    $session_has_timed_out = true;
    unset($SESSION->has_timed_out);
} else {
    $session_has_timed_out = false;
}

$frm  = false;
$user = false;

$authsequence = get_enabled_auth_plugins(); // Auths, in sequence.
foreach($authsequence as $authname) {
    $authplugin = get_auth_plugin($authname);
    // The auth plugin's loginpage_hook() can eventually set $frm and/or $user.
    $authplugin->loginpage_hook();
}


/// Define variables used in page
$site = get_site();

// Ignore any active pages in the navigation/settings.
// We do this because there won't be an active page there, and by ignoring the active pages the
// navigation and settings won't be initialised unless something else needs them.
$PAGE->navbar->ignore_active();
$loginsite = get_string("loginsite");
$PAGE->navbar->add($loginsite);

if ($user !== false or $frm !== false or $errormsg !== '') {
    // some auth plugin already supplied full user, fake form data or prevented user login with error message

} else if (!empty($SESSION->wantsurl) && file_exists($CFG->dirroot.'/login/weblinkauth.php')) {
    // Handles the case of another Moodle site linking into a page on this site
    //TODO: move weblink into own auth plugin
    include($CFG->dirroot.'/login/weblinkauth.php');
    if (function_exists('weblink_auth')) {
        $user = weblink_auth($SESSION->wantsurl);
    }
    if ($user) {
        $frm->username = $user->username;
    } else {
        $frm = data_submitted();
    }

} else {
    $frm = data_submitted();
}

// Restore the #anchor to the original wantsurl. Note that this
// will only work for internal auth plugins, SSO plugins such as
// SAML / CAS / OIDC will have to handle this correctly directly.
// login web service post
// $jwt_token = JWT::decode($_POST["token"], "1342423424324324234", array('HS256'));
// $jwt_token->username = trim(core_text::strtolower($jwt_token->username));
// $user = authenticate_user_login($jwt_token->username, $jwt_token->password, false);
// var_dump($user);
// var_dump(complete_user_login($user));
// var_dump(authenticate_user_login($jwt_token->username, $jwt_token->password, false));
// require_logout();

// if(empty(isloggedin())){ // diubah
//     redirect("/url");
// }
// get token login
if (isset($_GET["token"])) { // jika da ge token
    global $DB; // ambil variable global

    $ch = curl_init(); // curl post ke web sekolah
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/me', // seusai sama url 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "X-Requested-With: XMLHttpRequest",
                'Authorization: Bearer ' . $_GET["token"],
            ),
        )
    );
    // Send the request 
    $response = curl_exec($ch); // get reponse

    // Check for errors 
    if ($response === false) {
        die(curl_error($ch));
    }
    // Close the cURL handler 
    curl_close($ch);;
    // Print the date from the response 
    $api_res = json_decode($response, true);  // decode response dari json ke arrau

   
   
    //$_SESSION['token'] = $_POST["token"];
    $jwt_token = JWT::decode($api_res['token'], "1342423424324324234", array('HS256')); // decode token
    setcookie("role_cookies", $jwt_token->auth->role, time() + (86400 * 30), "/"); // 86400 = 1 day
    $jwt_token->username  =  trim(core_text::strtolower($jwt_token->auth->username));
    $jwt_token->password = $jwt_token->auth->password;
    $user = authenticate_user_login($jwt_token->username, $jwt_token->password, false); // get autenticate 
    
    // $jwt_token->username = trim(core_text::strtolower($jwt_token->username)); // get username token

    // cek role ;
    switch ($jwt_token->auth->role) {
        case 'siswa':
            $id_role = $DB->get_field('role', 'id', ['shortname' => 'student']); // siswa
            break;
        case 'guru':
            $id_role = $DB->get_field('role', 'id', ['shortname' => 'editingteacher']); // guru
            break;
        case 'manager':
            $id_role = $DB->get_field('role', 'id', ['shortname' => 'manager']); // manager
            break;
        default:
            # code...
            break;
    }
    

    $context = context_system::instance();  // before login update data if exist
    if ($jwt_token->role === "siswa") {
        $lastname = $jwt_token->kelas->nama_kelas;
    }else{
        if(empty($lastname = $jwt_token->user->jabatan_guru))
        {
            $lastname = $jwt_token->user->spesifc_role;
        }   
    }
    if ($user) { // if have user
        $user_id = $DB->get_field('user', 'id', ['username' => trim(core_text::strtolower($jwt_token->username))]); // mencari id
        $upduser = new stdClass(); // ngambil std class untuk update datz
        $upduser->id = $user_id; // where id = user_id
        $upduser->firstname  = $jwt_token->user->name;
        $upduser->lastname = $lastname;
        $upduser->password = hash_internal_user_password($jwt_token->password); // set data
        $DB->update_record('user', $upduser); // update data
        $id_user = $DB->get_field('user', 'id', ['username' => trim(core_text::strtolower($jwt_token->username))    ]);
        role_unassign_all(array('userid' => $id_user));
        role_assign($id_role, $id_user, $context);

        if (!empty($user->lang)) {
            // unset previous session language - use user preference instead
            unset($SESSION->lang);
        }
        /// Let's get them all set up.  
        complete_user_login($user);
        
        ///core\session\manager::apply_concusssrrent_login_limit($user->id, session_id());
        // sets the username cookie
        if (!empty($CFG->nolastloggedin)) {
            // do not store last logged in user in cookie
            // auth plugins can temporarily override this from loginpage_hook()
            // do not save $CFG->nolastloggedin in database!
        } else if (empty($CFG->rememberusername) or ($CFG->rememberusername == 2 and empty($jwt_token->rememberusername))) {
            // no permanent cookies, delete old one if exists
            set_moodle_cookie('');
        } else {
            set_moodle_cookie($USER->username);
        }
        $urltogo = core_login_get_return_url(); // rpute login 
        // Discard any errors before the last redirect.
        unset($SESSION->loginerrormsg);

        // test the session actually works by redirecting to self

        $SESSION->wantsurl = $urltogo;

        redirect('http://localhost/Moodle-starbhak/my/');
        
    } else { // jika tidak ada
        // nyari user
        $user_id = $DB->get_field('user', 'id', ["username" => $jwt_token->username]);
        if (!empty($user_id)) {
            $upduser = new stdClass();
            $upduser->id = $user_id;
            $upduser->firstname  = $jwt_token->user->name;
            $upduser->lastname = $lastname;
            $upduser->password = hash_internal_user_password($jwt_token->password);
            $DB->update_record('user', $upduser);
            $id_user = $DB->get_field('user', 'id', ['username' => trim(core_text::strtolower($jwt_token->username))]);
            role_unassign_all(array('userid' => $id_user));
            role_assign($id_role, $id_user, $context);
        } else {
            // jika tidak buat baru 
            // create new user
      
            $user             = new StdClass();
            $user->email      = strtolower('email'); //MOODLE requires lowercase
            $user->username   = trim(core_text::strtolower($jwt_token->username));
            $user->password   = hash_internal_user_password($jwt_token->password);
            $user->lastname   = $lastname;
            $user->firstname  = $jwt_token->user->name;
            // These values are required. 
            // Default values are stored in moodle config files but... this is easier.
            $user->auth       = 'manual';
            $user->confirmed  = 1;
            $user->mnethostid = 1;
            $user->country    = 'ES'; //Or another country
            $user->lang       = 'es'; //Or another country
            $user->timecreated = time();
            $user->maildisplay = 0;
            $DB->insert_record('user', $user); // returns new userid
            $userid = $DB->get_field('user', 'id', ['username' => trim(core_text::strtolower($jwt_token->username))]);
            $context = context_system::instance();
            role_assign($id_role, $userid, $context);

            
                     // role_id, user_id, context
        }
        $user = authenticate_user_login($jwt_token->username, $jwt_token->password, false); // get autenticate 

        /// Let's get them all set up.
        // user login 
        complete_user_login($user);
        //core\session\manager::apply_concurrent_login_limit($user->id, session_id());

        // sets the username cookie
        if (!empty($CFG->nolastloggedin)) {
            // do not store last logged in user in cookie
            // auth plugins can temporarily override this from loginpage_hook()
            // do not save $CFG->nolastloggedin in database!

        } else if (empty($CFG->rememberusername) or ($CFG->rememberusername == 2 and empty($jwt_token->rememberusername))) {
            // no permanent cookies, delete old one if exists
            set_moodle_cookie('');
        } else {
            set_moodle_cookie($USER->username);
        }

        $urltogo = core_login_get_return_url();

        // Discard any errors before the last redirect.
        unset($SESSION->loginerrormsg);

        // test the session actually works by redirecting to self
        $SESSION->wantsurl = $urltogo;
        redirect('http://localhost/Moodle-starbhak/my/'); // ubah redirect
        // echo json_encode(['succes' => true, 'code' => 200]);
        // die;
    }
}

if (isset($_POST)) {
    global $DB;

    $ch = curl_init(); // curl post ke web sekolah
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/me', // seusai sama url 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "X-Requested-With: XMLHttpRequest",
                'Authorization: Bearer ' . $_POST['token'],
            ),
        )
    );
    // Send the request 
    $response = curl_exec($ch); // get reponse

    // Check for errors 
    if ($response === false) {
        die(curl_error($ch));
    }
    // Close the cURL handler 
    curl_close($ch);
    // Print the date from the response 
    $api_res = json_decode($response, true);  // decode response dari json ke arrau

    if (isset($api_res)) {
        // get all data user 
        $sql = 'SELECT mdl_user.username,mdl_user.password,mdl_user.firstname,mdl_user.lastname,mdl_role.shortname AS role FROM mdl_role_assignments INNER JOIN mdl_role ON mdl_role_assignments.roleid = mdl_role.id INNER JOIN mdl_user ON  mdl_role_assignments.userid = mdl_user.id';

        $user = $DB->get_records_sql($sql);
        echo json_encode(["user" => $user, "success" => true], 200);
        die;
    }
    echo json_encode(["fail" => "Wrong token"], 200);
    die;
}

if ($anchor && isset($SESSION->wantsurl) && strpos($SESSION->wantsurl, '#') === false) {

}


if ($frm and isset($frm->username)) {                             // Login WITH cookies
    /// Check if the user has actually submitted login data to us
    $frm->username = trim(core_text::strtolower($frm->username));

    if (is_enabled_auth('none') ) {
        if ($frm->username !== core_user::clean_field($frm->username, 'username')) {
            $errormsg = get_string('username').': '.get_string("invalidusername");
            $errorcode = 2;
            $user = null;
        }
    }

    if ($user) {
        // The auth plugin has already provided the user via the loginpage_hook() called above.
    } else if (($frm->username == 'guest') and empty($CFG->guestloginbutton)) {
        $user = false;    /// Can't log in as guest if guest button is disabled
        $frm = false;
    } else {
        if (empty($errormsg)) {
            $logintoken = isset($frm->logintoken) ? $frm->logintoken : '';
            $user = authenticate_user_login($frm->username, $frm->password, false, $errorcode, $logintoken);
        }
    }

    // Intercept 'restored' users to provide them with info & reset password
    if (!$user and $frm and is_restored_user($frm->username)) {
        $PAGE->set_title(get_string('restoredaccount'));
        $PAGE->set_heading($site->fullname);
        echo $OUTPUT->header();
        echo $OUTPUT->heading(get_string('restoredaccount'));
        echo $OUTPUT->box(get_string('restoredaccountinfo'), 'generalbox boxaligncenter');
        require_once('restored_password_form.php'); // Use our "supplanter" login_forgot_password_form. MDL-20846
        $form = new login_forgot_password_form('forgot_password.php', array('username' => $frm->username));
        $form->display();
        echo $OUTPUT->footer();
        die;
    }

    if ($user) {

        // language setup
        if (isguestuser($user)) {
            // no predefined language for guests - use existing session or default site lang
            unset($user->lang);

        } else if (!empty($user->lang)) {
            // unset previous session language - use user preference instead
            unset($SESSION->lang);
        }

        if (empty($user->confirmed)) {       // This account was never confirmed
            $PAGE->set_title(get_string("mustconfirm"));
            $PAGE->set_heading($site->fullname);
            echo $OUTPUT->header();
            echo $OUTPUT->heading(get_string("mustconfirm"));
            if ($resendconfirmemail) {
                if (!send_confirmation_email($user)) {
                    echo $OUTPUT->notification(get_string('emailconfirmsentfailure'), \core\output\notification::NOTIFY_ERROR);
                } else {
                    echo $OUTPUT->notification(get_string('emailconfirmsentsuccess'), \core\output\notification::NOTIFY_SUCCESS);
                }
            }
            echo $OUTPUT->box(get_string("emailconfirmsent", "", s($user->email)), "generalbox boxaligncenter");
            $resendconfirmurl = new moodle_url('/login/index.php',
                [
                    'username' => $frm->username,
                    'password' => $frm->password,
                    'resendconfirmemail' => true,
                    'logintoken' => \core\session\manager::get_login_token()
                ]
            );
            echo $OUTPUT->single_button($resendconfirmurl, get_string('emailconfirmationresend'));
            echo $OUTPUT->footer();
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['succes' => true, 'code' => 200]);
            die;
        }

    /// Let's get them all set up.
        complete_user_login($user);

        \core\session\manager::apply_concurrent_login_limit($user->id, session_id());

        // sets the username cookie
        if (!empty($CFG->nolastloggedin)) {
            // do not store last logged in user in cookie
            // auth plugins can temporarily override this from loginpage_hook()
            // do not save $CFG->nolastloggedin in database!

        } else if (empty($CFG->rememberusername) or ($CFG->rememberusername == 2 and empty($frm->rememberusername))) {
            // no permanent cookies, delete old one if exists
            set_moodle_cookie('');

        } else {
            set_moodle_cookie($USER->username);
        }

        $urltogo = core_login_get_return_url();

    /// check if user password has expired
    /// Currently supported only for ldap-authentication module
        $userauth = get_auth_plugin($USER->auth);
        if (!isguestuser() and !empty($userauth->config->expiration) and $userauth->config->expiration == 1) {
            $externalchangepassword = false;
            if ($userauth->can_change_password()) {
                $passwordchangeurl = $userauth->change_password_url();
                if (!$passwordchangeurl) {
                    $passwordchangeurl = $CFG->wwwroot.'/login/change_password.php';
                } else {
                    $externalchangepassword = true;
                }
            } else {
                $passwordchangeurl = $CFG->wwwroot.'/login/change_password.php';
            }
            $days2expire = $userauth->password_expire($USER->username);
            $PAGE->set_title("$site->fullname: $loginsite");
            $PAGE->set_heading("$site->fullname");
            if (intval($days2expire) > 0 && intval($days2expire) < intval($userauth->config->expiration_warning)) {
                echo $OUTPUT->header();
                echo $OUTPUT->confirm(get_string('auth_passwordwillexpire', 'auth', $days2expire), $passwordchangeurl, $urltogo);
                echo $OUTPUT->footer();
                exit;
            } elseif (intval($days2expire) < 0 ) {
                if ($externalchangepassword) {
                    // We end the session if the change password form is external. This prevents access to the site
                    // until the password is correctly changed.
                    require_logout();
                } else {
                    // If we use the standard change password form, this user preference will be reset when the password
                    // is changed. Until then it will prevent access to the site.
                    set_user_preference('auth_forcepasswordchange', 1, $USER);
                }
                echo $OUTPUT->header();
                echo $OUTPUT->confirm(get_string('auth_passwordisexpired', 'auth'), $passwordchangeurl, $urltogo); // auth expired
                echo $OUTPUT->footer();
                exit;
            }
        }

        // Discard any errors before the last redirect.
        unset($SESSION->loginerrormsg);

        // test the session actually works by redirecting to self
        $SESSION->wantsurl = $urltogo;
        redirect(new moodle_url(get_login_url(), array('testsession'=>$USER->id)));

    } else {
        if (empty($errormsg)) {
            if ($errorcode == AUTH_LOGIN_UNAUTHORISED) {
                $errormsg = get_string("unauthorisedlogin", "", $frm->username);
            } else {
                $errormsg = get_string("invalidlogin");
                $errorcode = 3;
            }
        }
    }
}

/// Detect problems with timedout sessions
if ($session_has_timed_out and !data_submitted()) {
    $errormsg = get_string('sessionerroruser', 'error');
    $errorcode = 4;
}

/// First, let's remember where the user was trying to get to before they got here

if (empty($SESSION->wantsurl)) {
    $SESSION->wantsurl = null;
    $referer = get_local_referer(false);
    if ($referer &&
            $referer != $CFG->wwwroot &&
            $referer != $CFG->wwwroot . '/' &&
            $referer != $CFG->wwwroot . '/login/' &&
            strpos($referer, $CFG->wwwroot . '/login/?') !== 0 &&
            strpos($referer, $CFG->wwwroot . '/login/index.php') !== 0) { // There might be some extra params such as ?lang=.
        $SESSION->wantsurl = $referer;
    }
}

/// Redirect to alternative login URL if needed
if (!empty($CFG->alternateloginurl)) {
    $//loginurl = new moodle_url($CFG->alternateloginurl);

    $loginutl = '/aaaaaa';
    $loginurlstr = $loginurl->out(false);

    if (strpos($SESSION->wantsurl, $loginurlstr) === 0) {
        // We do not want to return to alternate url.
        $SESSION->wantsurl = null;
    }

    // If error code then add that to url.
    if ($errorcode) {
        $loginurl->param('errorcode', $errorcode);
    }

    redirect($loginurl->out(false));
}

/// Generate the login page with forms

if (!isset($frm) or !is_object($frm)) {
    $frm = new stdClass();
}

if (empty($frm->username) && $authsequence[0] != 'shibboleth') {  // See bug 5184
    if (!empty($_GET["username"])) {
        // we do not want data from _POST here
        $frm->username = clean_param($_GET["username"], PARAM_RAW); // we do not want data from _POST here
    } else {
        $frm->username = get_moodle_cookie();
    }

    $frm->password = "";
}

if (!empty($SESSION->loginerrormsg)) {
    // We had some errors before redirect, show them now.
    $errormsg = $SESSION->loginerrormsg;
    unset($SESSION->loginerrormsg);

} else if ($testsession) {
    // No need to redirect here.
    unset($SESSION->loginerrormsg);

} else if ($errormsg or !empty($frm->password)) {
    // We must redirect after every password submission.
    if ($errormsg) {
        $SESSION->loginerrormsg = $errormsg;
    }
    redirect(new moodle_url('/login/index.php')); // jika password slaah ( balik ke dashboard )
}

$PAGE->set_title("$site->fullname: $loginsite");
$PAGE->set_heading("$site->fullname");

echo $OUTPUT->header();



// form jika user usah login login
if (isloggedin() and !isguestuser()) { // jika sudah login 
    // prevent logging when already logged in, we do not want them to relogin by accident because sesskey would be changed
    echo $OUTPUT->box_start(); // box nya form etc
    $logout = new single_button(new moodle_url('/login/logout.php', array('sesskey'=>sesskey(),'loginpage'=>1)), get_string('logout'), 'post');  // untuk logout / keluar
    $continue = new single_button(new moodle_url('/'), get_string('cancel'), 'get'); // untuk cansel atau kembali ke halmaan
    echo $OUTPUT->confirm(get_string('alreadyloggedin', 'error', fullname($USER)), $logout, $continue); // nampilin button keluar dan cansel
    echo $OUTPUT->box_end(); // box end
} else {
    $loginform = new \core_auth\output\login($authsequence, $frm->username);
    $loginform->set_error($errormsg);
    echo $OUTPUT->render($loginform);
}

echo $OUTPUT->footer();
