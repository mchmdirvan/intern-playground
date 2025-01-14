<!-- 
Tugas 2
Buatlah array yang berisikan nilai siswa (contoh : [80,75,45,65,70])
Lalu lakukan perulangan untuk mencetak nilai siswa tersebut :
"Lulus" jika nilai >= 60
"Tidak Lulus" jika nilai < 60
Contoh :
"nilai anda" adalah 69, mohon maaf anda belum lulus"
"nilai anda adalah 75, selamat anda sudah lulus" 
-->

<?php
 $score = [80, 75, 45, 65, 70];
  foreach ($score as $value) {
      if ($value >= 60) {
          echo "Nilai anda adalah $value, selamat anda sudah lulus\n";
      } else {
          echo "Nilai anda adalah $value, mohon maaf anda belum lulus\n";
      }
  }
?>