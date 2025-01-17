<?php
// Operator Penugasan
// Operator penugasan digunakan untuk memberikan nilai pada variabel
// Operator penugasan terdiri dari:
// = : untuk memberikan nilai
// += : untuk menambahkan nilai
// -= : untuk mengurangkan nilai
// *= : untuk mengalikan nilai
// /= : untuk membagi nilai
// %= : untuk membagi nilai dan mengambil sisa hasil bagi
// .= : untuk menggabungkan nilai

// $a += $b; // sama seperti $a = $a + $b
// $a -= $b; // sama seperti $a = $a - $b
// $a *= $b; // sama seperti $a = $a * $b
// $a /= $b; // sama seperti $a = $a / $b
// $a %= $b; // sama seperti $a = $a % $b

$total = 0;
$fruit = 10000;
$chicken = 35000;

$total += $fruit;
$total += $chicken;
var_dump($total); // 45000
?>