<?php

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs): ?>
      <li>
        <a
          href="05_Get_Detail.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>