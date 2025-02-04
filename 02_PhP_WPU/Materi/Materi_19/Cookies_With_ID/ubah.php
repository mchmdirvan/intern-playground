<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// ambil data di URL
$id = $_GET['id'];
// var_dump($id); // output: string(1) "1"

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs); 
// var_dump($mhs)[0]['nama']; 
// var_dump($mhs)['email'];


if (isset($_POST['submit'])) {
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
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="post " enctype="multipart/form-data">
    <ul>
      <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
      <li>
        <label for="nrp">NRP: </label>
        <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp']; ?>">
      </li>
      <li>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
      </li>
      <li>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan: </label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
      </li>
      <li>
        <label for="gambar">Gambar: </label>
        <img src="img/<?= $mhs['gambar']; ?>" width="40">
        <input type="file" name="gambar" id="gambar" required value="<?= $mhs['gambar']; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>