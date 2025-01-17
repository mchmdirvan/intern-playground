<?php 
// Switch Case
// Struktur kendali percabangan yang
// digunakan untuk mengambil keputusan
// berdasarkan kondisi yang diberikan

// Syntax
// switch (expression) {
//     case value1:
//         statement1; // kode yang akan dijalankan jika kondisi bernilai true
//         break;
//     case value2:
//         statement2; // kode yang akan dijalankan jika kondisi bernilai true
//         break;
//     default:

$hari = 'Minggu';

switch ($hari) {
    case 'Senin':
        echo 'Hari pertama kerja!';
        break;
    case 'Sabtu':
        echo 'Besok liburrrrrrr!';
        break;
    case 'Minggu':
        echo 'Aduh besok senin';
        break;
    default:
        echo 'Hari biasa';
}

?>