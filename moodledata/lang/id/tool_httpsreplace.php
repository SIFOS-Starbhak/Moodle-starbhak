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
 * Strings for component 'tool_httpsreplace', language 'id', version '3.11'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['domainexplain'] = 'Saat situs dipindahkan dari HTTP ke HTTPS, semua konten HTTP yang disematkan akan berhenti berfungsi. Alat ini memungkinkan Anda untuk secara otomatis mengonversi konten HTTP ke HTTPS.

Sebelum melakukan konversi, konten akan dipindai untuk menemukan URL yang mungkin tidak berfungsi setelah konversi. Anda mungkin ingin memeriksa masing-masing memiliki HTTPS yang tersedia, atau mencari sumber alternatif.';
$string['httpwarning'] = 'Model ini masih berjalan di HTTP. Anda masih dapat menjalankan alat ini dan konten eksternal akan diubah menjadi HTTPS, tetapi konten internal akan tetap di HTTP. Anda perlu menjalankan skrip ini lagi setelah beralih ke HTTPS untuk mengonversi konten internal.';
$string['notimplemented'] = 'Maaf, fitur ini tidak diterapkan di pengandar basis data Anda.';
$string['oktoprocede'] = 'Pemindaian tidak menemukan masalah dengan konten Anda. Anda dapat melanjutkan untuk meningkatkan konten HTTP apa pun untuk menggunakan HTTPS.';
$string['pageheader'] = 'Tingkatkan URL konten yang dihosting secara eksternal ke HTTPS';
$string['privacy:metadata'] = 'Pengaya alat konversi HTTPS tidak menyimpan data pribadi apa pun.';
