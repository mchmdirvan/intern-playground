<?php
// Array Numerik
// Array yang indexnya angka
// Variable yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index, yang dimulai dari 0

// Membuat Array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
print_r($arr1[0]);
echo "<br>";

// Menambahkan elemen baru pada array
var_dump($arr1[1]);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>