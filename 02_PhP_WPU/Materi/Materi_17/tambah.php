<?php
require 'functions.php';

if (isset($_POST['submit'])) {

  // var_dump($_POST); // untuk mengecek data yang dikirim
  // var_dump($_FILES); // untuk mengecek file yang dikirim
  // die; // untuk menghentikan program

  if (tambah($_POST) > 0) {
    echo "
    <script>
      alert('Data berhasil ditambahkan!');
      document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('Data Gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>
    ";
    echo "<br>";
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>

  <!-- enctype="multipart/form-data" digunakan untuk mengirimkan file -->
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nrp">NRP: </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan: </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Gambar: </label>
        <input type="file" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>