<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'report_security', language 'id', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_cookiesecure_details'] = '<p>Jika komunikasi https diaktifkan, disarankan untuk mengaktifkan pengiriman kuki yang aman. Anda harus memiliki pengalihan permanen dari http ke https dan idealnya juga melayani header HSTS.</p>';
$string['check_cookiesecure_ok'] = 'Kuki aman diaktifkan.';
$string['check_crawlers_error'] = 'Akses mesin pencari diperbolehkan tetapi akses tamu dinonaktifkan.';
$string['check_crawlers_ok'] = 'Akses mesin pencari tidak diaktifkan.';
$string['check_defaultuserrole_details'] = '<p>Semua pengguna yang masuk diberi kemampuan peran pengguna bawaan. Pastikan tidak ada kemampuan berisiko yang diizinkan dalam peran ini.</p><p>Satu-satunya jenis warisan yang didukung untuk peran pengguna bawaan adalah <em>Pengguna yang diautentikasi</em>. Kemampuan tampilan kursus tidak boleh diaktifkan.</p>';
$string['check_dirindex_info'] = 'Indeks direktori tidak boleh diaktifkan';
$string['check_displayerrors_error'] = 'Setelan PHP untuk menampilkan kesalahan diaktifkan. Disarankan agar ini dinonaktifkan.';
$string['check_displayerrors_ok'] = 'Menampilkan kesalahan PHP dinonaktifkan.';
$string['check_emailchangeconfirmation_details'] = '<p>Direkomendasikan bahwa langkah konfirmasi surel diperlukan saat pengguna mengubah alamat surel mereka di profil mereka. Jika dinonaktifkan, spammer dapat mencoba mengeksploitasi server untuk mengirim spam.</p>
<p>Ruas email mungkin juga dikunci dari pengaya autentikasi, kemungkinan ini tidak dipertimbangkan di sini.</p>';
$string['check_embed_details'] = '<p>Penyematan objek tak terbatas sangat berbahaya - setiap pengguna terdaftar dapat meluncurkan serangan XSS terhadap pengguna server lain. Setelan ini harus dinonaktifkan di server produksi.</p>';
$string['check_embed_error'] = 'Filter media flash diaktifkan - ini sangat berbahaya bagi sebagian besar server.';
$string['check_frontpagerole_details'] = '<p>Peran halaman depan bawaan diberikan kepada semua pengguna terdaftar untuk aktivitas halaman depan. Pastikan tidak ada kemampuan berisiko yang diizinkan untuk peran ini.</p>
<p>Direkomendasikan agar peran khusus dibuat untuk tujuan ini dan peran jenis warisan tidak digunakan.</p>';
$string['check_guestrole_details'] = '<p>Peran tamu digunakan untuk tamu, bukan pengguna yang login dan akses kursus tamu sementara. Pastikan tidak ada kemampuan berisiko yang diizinkan dalam peran ini.</p><p>Satu-satunya jenis warisan yang didukung untuk peran tamu adalah <em>Tamu</em>.</p>';
$string['check_mediafilterswf_error'] = 'Filter media flash diaktifkan - ini sangat berbahaya bagi sebagian besar server.';
$string['check_mediafilterswf_name'] = 'Filter media .swf diaktifkan';
$string['check_mediafilterswf_ok'] = 'Filter media flash tidak diaktifkan.';
$string['check_nodemodules_details'] = '<p>Direktori <code>{$a->path}</code> berisi modul Node.js dan dependensinya, biasanya diinstal oleh utilitas NPM. Modul-modul ini mungkin diperlukan untuk pengembangan Moodle lokal, seperti untuk menggunakan kerangka kerja kasar. Mereka tidak diperlukan untuk menjalankan situs Moodle dalam produksi dan mereka dapat berisi kode yang berpotensi berbahaya yang mengekspos situs Anda ke serangan jarak jauh.</p><p>Sangat disarankan untuk menghapus direktori jika situs tersedia melalui URL publik, atau setidaknya melarang akses web ke dalam konfigurasi server web Anda.</p>';
$string['check_openprofiles_details'] = 'Profil pengguna yang terbuka dapat disalahgunakan oleh spammer. Disarankan agar <code>Paksa pengguna untuk masuk untuk profil</code> atau <code>Paksa pengguna untuk masuk</code> diaktifkan.';
$string['check_passwordpolicy_details'] = '<p> Direkomendasikan agar kebijakan kata sandi ditetapkan, karena menebak sandi seringkali merupakan cara termudah untuk mendapatkan akses tidak sah. Namun, jangan membuat persyaratan yang terlalu ketat, karena hal ini dapat mengakibatkan pengguna tidak dapat mengingat kata sandi mereka dan melupakan atau menuliskannya. </p>';
$string['check_passwordpolicy_error'] = 'Kebijakan kata sandi tidak disetel.';
$string['check_passwordpolicy_name'] = 'Kebijakan kata sandi';
$string['check_passwordpolicy_ok'] = 'Kebijakan kata sandi diaktifkan.';
$string['check_riskadmin_detailswarning'] = '<p>Harap verifikasi daftar administrator sistem berikut:</p>{$a->admins}
<p>Disarankan untuk menetapkan peran administrator dalam konteks sistem saja. Pengguna berikut memiliki penetapan peran admin (tidak didukung) dalam konteks lain:</p>{$a->unsupported}';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) tinjau penetapan peran</a>';
$string['check_riskadmin_warning'] = 'Ditemukan {$a->admincount} administrator server dan {$a->unsupcount} penetapan peran admin yang tidak didukung.';
$string['check_riskbackup_details_users'] = '<p> Karena peran di atas atau penggantian lokal, akun pengguna berikut saat ini memiliki izin untuk membuat cadangan yang berisi data pribadi dari pengguna mana pun yang terdaftar dalam kursus mereka. Pastikan mereka (a) tepercaya dan (b) dilindungi oleh sandi yang kuat: </p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} dalam {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) in {$a->contextname}</a>';
$string['check_vendordir_details'] = '<p>Direktori <code>{$a->path}</code> berisi berbagai pustakan pihak ketiga dan dependensinya, biasanya diinstal oleh PHP Composer. Pustaka ini mungkin diperlukan untuk pengembangan Moodle lokal, seperti untuk menginstal kerangka kerja PHPUnit. Mereka tidak diperlukan untuk menjalankan situs Moodle dalam produksi dan mereka dapat berisi kode yang berpotensi berbahaya yang mengekspos situs Anda ke serangan jarak jauh.</p><p>Sangat disarankan untuk menghapus direktori jika situs tersedia melalui URL publik, atau setidaknya melarang akses web ke dalam konfigurasi server web Anda.</p>';
$string['check_webcron_details'] = '<p> Menjalankan cron dari peramban web dapat memaparkan informasi yang memiliki hak istimewa kepada pengguna anonim. Direkomendasikan untuk hanya menjalankan cron dari baris perintah atau menyetel sandi cron untuk akses jarak jauh. </p>';
$string['details'] = 'Detail';
$string['privacy:metadata'] = 'Pengaya Ikhtisar keamanan tidak menyimpan data pribadi apa pun.';
