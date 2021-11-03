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

require('../../config.php');


if (isset($_POST)) {
    global $DB; 
    if ($_POST['token']) {
        
        // get all data user
        $sql_tm = 'SELECT mdl_user.username,mdl_user.password,mdl_user.firstname,mdl_user.email,mdl_user.lastname,mdl_role.shortname AS role FROM mdl_role_assignments INNER JOIN mdl_role ON mdl_role_assignments.roleid = mdl_role.id INNER JOIN mdl_user ON  mdl_role_assignments.userid = mdl_user.id'; 
        $sql_student =  'SELECT username,password,firstname,email,lastname FROM mdl_user'; 
        // query fetch data
        $user = $DB->get_records_sql($sql_tm);
        $user_student = $DB->get_records_sql($sql_student);
        echo json_encode(["user" => $user, "user_student"=> $user_student,"success" => true], 200);
        die;
    }
    echo json_encode(["fail" => $_POST['token']], 200);
    die;    
}

