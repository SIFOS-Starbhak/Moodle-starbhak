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
 * Strings for component 'mnet', language 'id', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Tentang server Anda';
$string['accesslevel'] = 'Level akses';
$string['addhost'] = 'Tambahkan hos';
$string['addnewhost'] = 'Tambahkan hos baru';
$string['addtoacl'] = 'Tambahkan ke kontrol akses';
$string['allhosts'] = 'Semua hos';
$string['allow'] = 'Izinkan';
$string['applicationtype'] = 'Tipe aplikasi';
$string['authmnetdisabled'] = 'Pengaya autentikasi MNet <strong>dinonaktifkan</strong>.';
$string['badcert'] = 'Ini bukan sertifikat valid.';
$string['certdetails'] = 'Detail sertifikat';
$string['courses'] = 'Kursus';
$string['databaseerror'] = 'Tidak dapat menulis detail ke basis data.';
$string['deleteaserver'] = 'Menghapus server';
$string['deletedhosts'] = 'Hos yang dihapus: {$a}';
$string['deletehost'] = 'Hapus hos';
$string['deletekeycheck'] = 'Anda yakin benar-benar ingin menghapus kunci ini?';
$string['deleteoutoftime'] = 'Jendela 60 detik Anda untuk menghapus kunci ini telah kedaluwarsa. Silakan mulai lagi.';
$string['deny'] = 'Tolak';
$string['description'] = 'Deskripsi';
$string['duplicate_usernames'] = 'Kami gagal membuat indeks pada kolom "mnethostid" dan "username" di tabel pengguna Anda. <br /> Ini dapat terjadi bila Anda memiliki <a href="{$a}" target="_blank"> nama pengguna duplikat di tabel pengguna Anda </a>. <br /> Peningkatan Anda seharusnya masih berhasil diselesaikan. Klik tautan di atas, dan petunjuk untuk memperbaiki masalah ini akan muncul di jendela baru. Anda dapat melakukannya di akhir peningkatan versi. <br />';
$string['enabled_for_all'] = '(Layanan ini telah diaktifkan untuk semua hos).';
$string['enterausername'] = 'Silakan masukkan nama pengguna, atau daftar nama pengguna dibatasi dengan koma.';
$string['expired'] = 'Kunci ini kedaluwarsa pada';
$string['expireyourkeyexplain'] = 'Moodle secara otomatis merotasi kunci Anda setiap 28 hari (secara bawaan) tetapi Anda memiliki opsi untuk <em>secara manual</em> kedaluwarsa kunci ini kapan saja. Ini hanya akan berguna jika Anda yakin kunci ini telah disusupi. Pengganti akan segera dibuat secara otomatis.<br />Menghapus kunci ini akan membuat aplikasi lain tidak dapat berkomunikasi dengan Anda, hingga Anda menghubungi setiap administrator secara manual dan memberikan kunci baru Anda kepada mereka.';
$string['forbidden-function'] = 'Fungsi itu belum diaktifkan untuk RPC.';
$string['forcesavechanges'] = 'Paksa simpan perubahan';
$string['hidelocal'] = 'Sembunyikan pengguna lokal';
$string['hideremote'] = 'Sembunyikan pengguna jarak jauh';
$string['host'] = 'hos';
$string['hostcoursenotfound'] = 'Hos atau kursus tidak ditemukan';
$string['hostdeleted'] = 'Hos dihapus';
$string['hostname'] = 'Nama hos';
$string['hostsettings'] = 'Setelan hos';
$string['id'] = 'ID';
$string['importfields'] = 'Ruas untuk diimpor';
$string['inspect'] = 'Inspeksi';
$string['installreflectionclasserror'] = 'Kesalahan pengkodean! Introspeksi MNet gagal untuk metode \'{$a->method}\' di kelas \'{$a->class}\'. Pesan kesalahan asli, jika membantu, adalah: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Kesalahan pengkodean! Introspeksi MNet gagal untuk fungsi \'{$a->method}\' di berkas \'{$a->file}\'. Pesan kesalahan asli, jika membantu, adalah: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Parameter akses tidak valid.';
$string['invalidactionparam'] = 'Parameter akses tidak valid.';
$string['invalidhost'] = 'Anda harus memberikan pengidentifikasi hos yang valid';
$string['invalidpubkey'] = 'Kuncinya bukan kunci SSL yang valid. ({$a})';
$string['invalidurl'] = 'Parameter URL tidak valid.';
$string['ipaddress'] = 'Alamat IP';
$string['is_in_range'] = 'Alamat IP <code>{$a}</code> mewakili hos tepercaya yang valid.';
$string['ispublished'] = '{$a} telah mengaktifkan layanan ini untuk Anda.';
$string['issubscribed'] = '{$a} berlangganan layanan ini di hos Anda.';
$string['keydeleted'] = 'Kunci Anda telah berhasil dihapus dan diganti.';
$string['keymismatch'] = 'Kunci publik yang Anda pegang untuk hos ini berbeda dengan kunci publik yang saat ini diterbitkan. Kunci yang saat ini diterbitkan adalah:';
$string['last_connect_time'] = 'Waktu koneksi terakhir';
$string['last_connect_time_help'] = 'Waktu terakhir Anda terhubung ke hos ini.';
$string['last_transport_help'] = 'Transportasi yang Anda gunakan untuk koneksi terakhir ke hos ini.';
$string['leavedefault'] = 'Gunakan setelan bawaan sebagai gantinya';
$string['listservices'] = 'Daftar layanan';
$string['loginlinkmnetuser'] = '<br />Jika Anda adalah pengguna jarak jauh MNet dan dapat <a href="{$a}">mengkonfirmasi alamat surel Anda di sini</a>, Anda dapat diarahkan ke halaman masuk Anda.<br />';
$string['logs'] = 'log';
$string['managemnetpeers'] = 'Kelola rekan-rekan';
$string['method'] = 'Metode';
$string['methodsignature'] = 'Tanda tangan metode untuk {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Gabungkan (hingga) 3 string dan kembalikan hasilnya';
$string['mnetdisabled'] = 'MNet <strong>dinonaktifkan</strong>.';
$string['nocurl'] = 'Pustaka cURL PHP tidak diinstal';
$string['peerprofilefielddesc'] = 'Di sini Anda dapat mengganti setelan global untuk ruas profil mana yang akan dikirim dan diimpor saat pengguna baru dibuat';
$string['privacy:metadata'] = 'Pengaya MNet tidak menyimpan data pribadi apa pun.';
$string['profilefielddesc'] = 'Di sini Anda dapat mengonfigurasi daftar ruas profil yang dikirim dan diterima melalui MNet saat akun pengguna dibuat, atau diperbarui. Anda juga dapat mengganti ini untuk setiap rekan MNet satu per satu. Perhatikan bahwa ruas berikut selalu dikirim dan bukan opsional: {$a}';
$string['remoteuserinfo'] = 'Profil diambil dari <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['reviewhostdetails'] = 'Tinjau detail hos';
$string['reviewhostservices'] = 'Tinjau layanan hos';
$string['ssl_acl_deny'] = 'SSO ACL: Tolak pengguna \'{$a->user}\' dari \'{$a->host}\'';
$string['sslverification'] = 'Verifikasi SSL';
$string['sslverification_help'] = 'Opsi ini memungkinkan Anda untuk mengonfigurasi tingkat keamanan saat menghubungkan ke rekan menggunakan HTTPS.

* Tidak ada: tidak ada tingkat keamanan
* Verifikasi host saja: memvalidasi domain sertifikat SSL
* Verifikasi host dan rekan (disarankan): memvalidasi domain dan penerbit sertifikat SSL';
$string['ssoaccesscontrol'] = 'Kontrol akses SSO';
$string['ssoacldescr'] = 'Gunakan halaman ini untuk memberikan/menolak akses ke pengguna tertentu dari host MNet jarak jauh. Ini berfungsi saat Anda menawarkan layanan SSO kepada pengguna jarak jauh. Untuk mengontrol kemampuan pengguna <em>lokal</em> Anda untuk menjelajah ke host MNet lainnya, gunakan sistem peran untuk memberi mereka kemampuan <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Agar fungsi ini berfungsi, Anda harus mengaktifkan Jaringan, ditambah pengaya autentikasi MNet yang diaktifkan.';
$string['strict'] = 'Ketat';
$string['subscribe'] = 'Langganan';
$string['system'] = 'Sistem';
$string['testclient'] = 'Klien uji MNet';
$string['testtrustedhosts'] = 'Uji alamat';
$string['testtrustedhostsexplain'] = 'Masukkan alamat IP untuk melihat apakah itu host tepercaya.';
$string['theysubscribe'] = 'Mereka berlangganan';
$string['transport_help'] = 'Opsi ini bersifat timbal balik, jadi Anda hanya dapat memaksa hos jarak jauh untuk menggunakan sertifikat SSL yang ditandatangani jika server Anda juga memiliki sertifikat SSL yang ditandatangani.';
$string['trustedhosts'] = 'Hos XML-RPC';
$string['trustedhostsexplain'] = '<p>Mekanisme host tepercaya memungkinkan mesin tertentu untuk mengeksekusi panggilan melalui XML-RPC ke bagian mana pun dari API Moodle. Ini tersedia untuk skrip untuk mengontrol perilaku Moodle dan bisa menjadi opsi yang sangat berbahaya untuk diaktifkan. Jika ragu, tutup saja.</p>
<p><strong>Ini tidak diperlukan untuk fitur MNet standar apa pun!</strong> Aktifkan hanya jika Anda tahu apa yang Anda lakukan.</p> <p>Untuk mengaktifkannya, masukkan daftar alamat IP atau jaringan, satu di setiap baris. Beberapa contoh:</p>
Hos lokal Anda:<br />127.0.0.1<br />Hos lokal Anda (dengan blok jaringan):<br />127.0.0.1/32<br />Hanya host dengan alamat IP 192.168.0.7:<br />192.168.0.7/32<br /> Setiap host dengan alamat IP antara 192.168.0.1 dan 192.168.0.255:<br />192.168.0.0/24<br />Host apa pun:<br />192.168.0.0/0<br />Jelas contoh terakhir adalah <strong>bukan</strong> konfigurasi yang disarankan.';
$string['turnitoff'] = 'Matikan';
$string['turniton'] = 'Nyalakan';
$string['type'] = 'Tipe';
$string['unknown'] = 'Tidak dikenal';
$string['unknownerror'] = 'Terjadi kesalahan yang tidak diketahui selama negosiasi.';
$string['usercannotchangepassword'] = 'Anda tidak dapat mengubah kata sandi Anda di sini karena Anda adalah pengguna jarak jauh.';
$string['userchangepasswordlink'] = '<br /> Anda mungkin dapat mengubah sandi Anda di penyedia <a href="{$a->wwwroot}/login/change_password.php "> {$a->description} </a>.';
$string['usernotfullysetup'] = 'Akun pengguna Anda tidak lengkap. Anda harus <a href="{$a}">kembali ke penyedia Anda</a> dan memastikan profil Anda selesai di sana. Anda mungkin perlu keluar dan masuk lagi agar ini berlaku.';
$string['usersareonline'] = 'Peringatan: {$a} pengguna dari server itu saat ini masuk ke situs Anda.';
$string['validated_by'] = 'Ini divalidasi oleh jaringan: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verifikasi hos dan rekan';
$string['verifyhostonly'] = 'Verifikasi hos saja';
$string['verifysignature-error'] = 'Verifikasi tanda tangan gagal. Sebuah kesalahan telah terjadi.';
$string['verifysignature-invalid'] = 'Verifikasi tanda tangan gagal. Tampaknya payload ini tidak ditandatangani oleh Anda.';
$string['version'] = 'Versi';
$string['warning'] = 'Peringatan';
$string['wrong-ip'] = 'Alamat IP Anda tidak cocok dengan alamat yang kami catat.';
$string['xmlrpc-missing'] = 'Anda harus menginstal XML-RPC di PHP build Anda untuk dapat menggunakan fitur ini.';
$string['yourhost'] = 'Hos Anda';
$string['yourpeers'] = 'Rekan Anda';
