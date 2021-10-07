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
 * Strings for component 'tool_messageinbound', language 'id', version '3.11'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultexpiration_help'] = 'Ketika alamat surel dibuat oleh penangan, alamat surel tersebut dapat diatur untuk kedaluwarsa secara otomatis setelah jangka waktu tertentu, sehingga tidak dapat digunakan lagi. Dianjurkan untuk mengatur periode kedaluwarsa.';
$string['enabled'] = 'Diaktifkan';
$string['handlerdisabled'] = 'Penangan surel yang Anda coba hubungi telah dinonaktifkan. Tidak dapat memproses pesan saat ini.';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Setelan surel';
$string['message_handlers'] = 'Pengendali pesan';
$string['messageinboundenabled_desc'] = 'Pemrosesan surat masuk harus diaktifkan agar pesan dapat dikirim dengan informasi yang sesuai.';
$string['messageinboundgeneralconfiguration'] = 'Konfigurasi umum';
$string['messageinboundhostpass'] = 'Kata sandi';
$string['messageinboundhostpass_desc'] = 'Ini adalah kata sandi yang akan diberikan penyedia layanan Anda untuk masuk ke akun surel Anda.';
$string['messageinboundhostssl'] = 'Gunakan SSL';
$string['messageinboundhosttype'] = 'Jenis server';
$string['messageinboundhostuser'] = 'Nama pengguna';
$string['messageprocessingsuccess'] = '{$a->plain}

Jika Anda tidak ingin menerima pemberitahuan ini di masa mendatang, Anda dapat mengedit preferensi perpesanan pribadi Anda dengan membuka {$a->messagepreferencesurl} di peramban Anda.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Jika Anda tidak ingin menerima pemberitahuan ini di masa mendatang, Anda dapat <a href="{$a->messagepreferencesurl}"> mengedit preferensi perpesanan pribadi Anda</a>.</p>';
$string['name'] = 'Nama';
$string['oldmessagenotfound'] = 'Anda mencoba mengautentikasi pesan secara manual, tetapi pesan tidak dapat ditemukan. Ini bisa jadi karena sudah diproses, atau karena pesan kedaluwarsa.';
$string['onehour'] = 'Satu jam';
$string['oneweek'] = 'Satu minggu';
$string['oneyear'] = 'Satu tahun';
$string['privacy:metadata:messagelist:messageid'] = 'ID pesan';
$string['replysubjectprefix'] = 'Balasan:';
$string['validateaddress_help'] = 'Ketika pesan diterima dari pengguna, Moodle mencoba untuk memvalidasi pesan dengan membandingkan alamat surel pengirim dengan alamat surel di profil pengguna mereka.

Jika pengirim tidak cocok, maka pengguna dikirimi pemberitahuan untuk mengonfirmasi bahwa mereka benar-benar mengirim surel.

Jika pengaturan ini dinonaktifkan, maka alamat surel pengirim tidak dicentang sama sekali.';
