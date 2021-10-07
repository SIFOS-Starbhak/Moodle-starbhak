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
 * Strings for component 'tool_mobile', language 'id', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Awakutu ADOdb diaktifkan. Ini harus dinonaktifkan dalam autentikasi basis data eksternal atau setelan pengaya pendaftaran basis data eksternal.';
$string['apppolicy'] = 'URL kebijakan aplikasi';
$string['apppolicy_help'] = 'URL kebijakan untuk pengguna aplikasi yang tercantum di halaman Tentang di aplikasi. Jika bidang dibiarkan kosong, URL kebijakan situs akan digunakan sebagai gantinya.';
$string['custommenuitems_desc'] = 'Item tambahan dapat ditambahkan ke menu utama aplikasi dengan menentukannya di sini. Masukkan setiap item menu tersuai pada baris baru dengan format: teks item, URL tautan, metode pembukaan tautan, dan kode bahasa (opsional, untuk menampilkan item kepada pengguna bahasa tertentu saja), dipisahkan dengan karakter pipa.

Metode pembukaan tautan adalah: aplikasi (untuk menautkan ke aktivitas yang didukung oleh aplikasi), inappbrowser (untuk membuka tautan di peramban tanpa keluar dari aplikasi), peramban (untuk membuka tautan di peramban bawaan perangkat di luar aplikasi) dan disematkan (untuk menampilkan tautan di iframe di halaman baru di aplikasi).

Saat item tidak memiliki terjemahan untuk bahasa tertentu, item tersebut akan menggunakan bahasa lain sebagai pengganti kecuali "_only" ditambahkan ke kode bahasa.

Sebagai contoh:
<pra>
Bantuan aplikasi|https://someurl.xyz/help|inappbrowser
Nilai saya|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Anda hanya akan melihat ini dalam bahasa Inggris|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Mode gelap';
$string['disabledfeatures'] = 'Fitur yang dinonaktifkan';
$string['disabledfeatures_desc'] = 'Pilih di sini fitur yang ingin Anda nonaktifkan di aplikasi Seluler untuk situs Anda. Harap dicatat bahwa beberapa fitur yang tercantum di sini mungkin sudah dinonaktifkan melalui setelan situs lain. Anda harus keluar dan masuk lagi di aplikasi untuk melihat perubahannya.';
$string['displayerrorswarning'] = 'Tampilan pesan awakutu (debugdisplay) diaktifkan. Ini harus dinonaktifkan.';
$string['downloadcourse'] = 'Unduh kursus';
$string['downloadcourses'] = 'Unduh kursus';
$string['enablesmartappbanners_desc'] = 'Jika diaktifkan, spanduk yang mempromosikan aplikasi seluler akan ditampilkan saat mengakses situs menggunakan peramban seluler.';
$string['forcedurlscheme'] = 'Jika Anda ingin hanya mengizinkan aplikasi bermerek khusus Anda untuk dibuka melalui jendela peramban, tentukan skema URL-nya di sini. Jika Anda hanya ingin mengizinkan aplikasi resmi, setel nilai bawaan. Biarkan ruas kosong jika Anda ingin mengizinkan aplikasi apa pun.';
$string['forcedurlscheme_key'] = 'Skema URL';
$string['forcelogout'] = 'Paksa keluar';
$string['forcelogout_desc'] = 'Jika diaktifkan, opsi aplikasi \'Ubah situs\' diganti dengan \'Keluar\'. Ini mengakibatkan pengguna benar-benar keluar. Mereka kemudian harus memasukkan kembali sandi mereka saat mereka ingin mengakses situs di lain waktu.';
$string['httpsrequired'] = 'Wajib HTTPS';
$string['invalidcertificateexpiredatewarning'] = 'Tampaknya sertifikat HTTPS untuk situs tersebut telah kedaluwarsa.';
$string['loginintheapp'] = 'Via aplikasi';
$string['logoutconfirmation'] = 'Anda yakin ingin keluar dari aplikasi seluler di perangkat seluler Anda? Dengan keluar, Anda harus memasukkan kembali nama pengguna dan kata sandi Anda di aplikasi seluler di semua perangkat tempat Anda menginstal aplikasi tersebut.';
$string['mainmenu'] = 'Menu utama';
$string['minimumversion'] = 'Jika versi aplikasi ditentukan (3.8.0 atau lebih tinggi), pengguna mana pun yang menggunakan versi aplikasi yang lebih lama akan diminta untuk meningkatkan aplikasi mereka sebelum diizinkan mengakses situs.';
$string['mobileapp'] = 'Aplikasi seluler';
$string['mobileappearance'] = 'Tampilan seluler';
$string['mobileappenabled'] = 'Situs ini mengaktifkan akses aplikasi seluler.<br /><a href="{$a}">Unduh aplikasi seluler</a>.';
$string['mobileauthentication'] = 'Autentikasi seluler';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Fitur seluler';
$string['mobilenotificationsdisabledwarning'] = 'Notifikasi seluler tidak diaktifkan. Mereka harus diaktifkan di setelan notifikasi.';
$string['mobilesettings'] = 'Setelan seluler';
$string['notificationslimitreached'] = 'Batas perangkat pengguna aktif bulanan telah terlampaui. Pemberitahuan untuk beberapa pengguna tidak akan dikirim. Disarankan agar Anda meningkatkan paket aplikasi Anda di <a href="{$a}" target="_blank"> Portal Aplikasi Moodle </a>.';
$string['notificationsmissingwarning'] = 'Statistik pemberitahuan aplikasi Moodle tidak dapat diambil. Ini kemungkinan besar karena notifikasi seluler belum diaktifkan di situs. Anda dapat mengaktifkannya di Administrasi Situs/Olah Pesan/Seluler.';
$string['pluginnotenabledorconfigured'] = 'Pengaya tidak diaktifkan atau dikonfigurasi.';
$string['qrcodedisabled'] = 'Akses melalui kode QR dinonaktifkan';
$string['qrcodeformobileapploginabout'] = 'Pindai kode QR dengan aplikasi seluler Anda dan Anda akan masuk secara otomatis. Kode QR akan kedaluwarsa dalam {$a} menit.';
$string['qrcodeformobileappurlabout'] = 'Pindai kode QR dengan aplikasi seluler Anda untuk mengisi URL situs di aplikasi Anda.';
$string['qrcodetype_desc'] = 'Kode QR dapat disediakan untuk dipindai oleh pengguna aplikasi seluler. Ini dapat digunakan untuk mengisi URL situs, atau di mana situs diamankan menggunakan HTTPS, untuk memasukkan pengguna secara otomatis tanpa harus memasukkan nama pengguna dan kata sandi mereka.';
$string['qrcodetypeurl'] = 'Kode QR dengan URL situs';
$string['readingthisemailgettheapp'] = 'Membaca ini di surel? <a href="{$a}">Unduh aplikasi seluler dan terima pemberitahuan di perangkat seluler Anda</a>.';
$string['setuplink'] = 'Halaman unduh aplikasi';
$string['setuplink_desc'] = 'URL halaman dengan opsi untuk mengunduh aplikasi seluler dari App Store dan Google Play. Tautan halaman unduhan aplikasi ditampilkan di footer halaman dan di profil pengguna. Biarkan kosong agar tidak menampilkan tautan.';
