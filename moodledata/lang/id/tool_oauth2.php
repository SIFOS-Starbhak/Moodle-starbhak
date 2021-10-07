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
 * Strings for component 'tool_oauth2', language 'id', version '3.11'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discovered_help'] = 'Penemuan berarti bahwa titik akhir OAuth 2 dapat ditentukan secara otomatis dari URL dasar untuk layanan OAuth. Tidak semua layanan harus "ditemukan", tetapi jika tidak, maka titik akhir dan informasi pemetaan pengguna perlu dimasukkan secara manual.';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL untuk titik akhir ini. Harus menggunakan protokol https://.';
$string['issuerbaseurl'] = 'URL Layanan dasar';
$string['issuerbaseurl_help'] = 'URL dasar yang digunakan untuk mengakses layanan.';
$string['issuerdisabled'] = 'Penerbit identitas dinonaktifkan';
$string['issuerenabled'] = 'Penerbit identitas diaktifkan';
$string['issuerimage'] = 'URL logo';
$string['issuerimage_help'] = 'URL gambar yang digunakan untuk menampilkan logo penerbit ini. Dapat ditampilkan pada halaman masuk.';
$string['issuerloginparamsoffline_help'] = 'Setiap sistem OAuth menentukan cara berbeda untuk meminta akses offline. Misalnya. Google memerlukan parameter tambahan: "access_type=offline&Prompt=consent". Parameter ini harus dalam format parameter kueri URL.';
$string['issuerrequireconfirmation'] = 'Wajib verifikasi surel';
$string['issuers'] = 'Penerbit';
$string['issuershowonloginpage'] = 'Tampilkan pada halaman log masuk';
$string['issuershowonloginpage_help'] = 'Jika pengaya autentikasi OAuth 2 diaktifkan, penerbit log masuk ini akan dicantumkan pada halaman masuk untuk memungkinkan pengguna masuk dengan akun dari penerbit ini.';
$string['issuersservicesallow'] = 'Izinkan layanan';
$string['issuerusedforinternal'] = 'Layanan internel';
$string['issuerusedforlogin'] = 'Log masuk';
$string['issueruseininternalonly'] = 'Hanya layanan internal';
$string['issueruseinloginonly'] = 'Hanya halaman masuk';
$string['linkedin_service'] = 'LinkedIn';
$string['loginissuer'] = 'Izinkan masuk';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Tidak dikonfigurasi';
$string['privacy:metadata'] = 'Pengaya layanan OAuth 2 tidak menyimpan data pribadi apa pun.';
$string['savechanges'] = 'Simpan perubahan';
$string['systemaccountconnected'] = 'Akun sistem terkoneksi';
$string['systemaccountnotconnected'] = 'Akun sistem tidak terkoneksi';
$string['systemauthstatus'] = 'Akun sistem tidak terkoneksi';
$string['usebasicauth_help'] = 'Memanfaatkan skema autentikasi HTTP dasar saat mengirim ID klien dan kata sandi dengan permintaan token penyegaran. Direkomendasikan oleh standar OAuth 2, tetapi mungkin tidak tersedia dengan beberapa penerbit.';
$string['userfieldexternalfield'] = 'Nama ruas eksternal';
$string['userfieldinternalfield'] = 'Nama ruas internal';
