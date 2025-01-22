<?php
// Associative Array
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Sandhika Galih",
    "nrp" => "043040023",
    "email" => "sandika@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "ilham.webp",
  ],
  [
    "nrp" => "0123456780",
    "nama" => "Doddy Ferdiansyah",
    "email" => "doddy@gmail.com",
    "jurusan" => "Teknik Mesin",
    "gambar" => "agung.webp",
  ]

];

echo $mahasiswa[1]["email"]; //doddy@gmail.com
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>" alt="">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>