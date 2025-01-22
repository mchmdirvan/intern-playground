<!--  
  Tugas 1 (wajib hari ini selesai !!!)
  Buatlah program yang dapat mencetak angka 1 - 20
  Tentukan apakah setiap angka tersebut ganjil atau genap
  contoh :
  1 adalah Ganjil
  2 adalah Genap
  3 adalah Ganjil
  dst 
-->

<?php
  for ($i=1; $i <= 20; $i++) { 
    echo $i . " adalah " . ($i % 2 == 0 ? "Genap" : "Ganjil") . "<br>";
  }
?>