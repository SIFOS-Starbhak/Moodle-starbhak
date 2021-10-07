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
 * Strings for component 'tool_lpmigrate', language 'id', version '3.11'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursestartdate_help'] = 'Jika diaktifkan, kursus dengan tanggal mulai sebelum tanggal yang ditentukan tidak akan dimigrasikan.';
$string['explanation'] = 'Alat ini dapat digunakan untuk memperbarui kerangka kompetensi ke versi yang lebih baru. Ini mencari kompetensi dalam kursus dan kegiatan menggunakan kerangka kerja yang lebih lama, dan memperbarui tautan untuk menunjuk ke kerangka kerja baru.

Tidak disarankan untuk mengedit kumpulan kompetensi lama secara langsung, karena ini akan mengubah semua kompetensi yang telah diberikan dalam rencana pembelajaran pengguna.

Biasanya Anda akan mengimpor kerangka kerja versi baru, menyembunyikan kerangka kerja lama, lalu menggunakan alat ini untuk memigrasikan kursus baru ke kerangka kerja baru.';
$string['privacy:metadata'] = 'Pengaya Perkakas migrasi kompetensi tidak menyimpan data pribadi apa pun.';
