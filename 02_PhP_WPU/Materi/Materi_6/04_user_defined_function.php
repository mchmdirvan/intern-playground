<?php
// User Defined Function
// Function adalah sekumpulan intruksi yang dibungkus dalam sebuah blok
// Function bisa digunakan ulang tanpa harus menulis ulang instruksi di dalamnya
// Function diawali dengan keyword function, diikuti dengan nama function dan diakhiri dengan tanda kurung
// Function bisa memiliki parameter atau argument
// Function bisa memiliki return value
// Function yang kita buat sendiri disebut dengan user defined function

// Function yang sudah disediakan oleh PHP disebut dengan built-in function
// Function yang sudah dibuat bisa dipanggil dengan menggunakan nama function diikuti dengan tanda kurung
// Function yang sudah dibuat bisa dipanggil berkali-kali
// Function yang sudah dibuat bisa dipanggil di file yang berbeda

// Membuat Function
function salam($waktu = "Datang", $nama = "Admin")
{
  return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>

<body>
  <h1> <?= salam("pagi", "sandika"); ?> </h1>
</body>

</html>