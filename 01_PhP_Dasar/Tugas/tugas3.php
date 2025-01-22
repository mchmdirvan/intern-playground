<!-- 
Tugas 3
Buatlah program yang dapat memeriksa apakah suatu angka adalah bilangan prima atau bukan
note : angka prima hanya dapat dibagi oleh 1 dan dirinya sendiri
contoh :
7 adalah bilangan prima
8 bukan bilangan prima 
-->

<?php
$angka = 7;
$count = 0;
for ($i = 1; $i <= $angka; $i++) {
  if ($angka % $i == 0) {
    $count++;
  }
}
if ($count == 2) {
  echo "$angka adalah bilangan prima\n";
} else {
  echo "$angka bukan bilangan prima\n";
}
?>