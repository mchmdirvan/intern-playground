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
  $arrays =[100,85,80,70,50,0];
  foreach ($arrays as $array){ 
    echo "nilai kamu $array " . ($array > 50 ? "hore kamu lulus \n" : "hore kamu tidak lulus \n") ;
  }
?>