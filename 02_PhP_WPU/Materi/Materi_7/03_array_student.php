<?php
$mahasiswa = [
  ["Sandika Galih", "123456789", "Teknik Informatika", "sandikagalih@gmail.com"],
  ["Erik Doank", "987654321", "Teknik Mesin", "erik@gmail.com"],
  ["Doddy Ferdiansyah", "123456780", "Teknik Planologi", "doddy@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs): ?>
      <li>Nama: <?= $mhs[0]; ?></li>
      <li>NIM: <?= $mhs[1]; ?></li>
      <li>Jurusan: <?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>