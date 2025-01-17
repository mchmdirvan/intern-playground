<?php 
// If Else
// Struktur kendali percabangan yang
// digunakan untuk mengambil keputusan
// berdasarkan kondisi yang diberikan

// Syntax
// if (expression) 
//     statement; // kode yang akan dijalankan jika kondisi bernilai true

// if (expression) {
//     statement1; // kode yang akan dijalankan jika kondisi bernilai true
//     statement2; // kode yang akan dijalankan jika kondisi bernilai true
// }

// if (expression) {
//     statement1; // kode yang akan dijalankan jika kondisi bernilai true
// } else {
//     statement2; // kode yang akan dijalankan jika kondisi bernilai false
// }

// if (expression1) {
//     statement1; // kode yang akan dijalankan jika kondisi bernilai true
// } elseif (expression2) {
//     statement2; // kode yang akan dijalankan jika kondisi bernilai true
// } else { 
//     statement3; // kode yang akan dijalankan jika kondisi bernilai false
// }

// Ternary Operator
// Struktur kendali percabangan yang
// digunakan untuk mengambil keputusan
// berdasarkan kondisi yang diberikan

// Syntax
// (expression) ? statement1 : statement2;

// Contoh
// $nilai = 80;
// echo ($nilai >= 75) ? 'Lulus' : 'Tidak Lulus';

$nilai = 20;

if ($nilai >= 90) {
    echo 'A';
} elseif ($nilai >= 75) {
    echo 'B';
} elseif ($nilai >= 50) {
    echo 'C';
} else {
    echo 'D';
}

?>