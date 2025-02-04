<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "playground");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row($result); // array numerik
// mysqli_fetch_assoc($result); // array associative
// mysqli_fetch_array($result); // keduanya
// mysqli_fetch_object($result); // object

// $mhs = mysqli_fetch_row($result); 
// var_dump($mhs);
// var_dump($mhs[3]);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
// var_dump($mhs["jurusan"]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
// var_dump($mhs["jurusan"]);

// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?= $i ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
        <td> <img src="img/<?= $row["gambar"]; ?>" width="50" alt=""> </td>
        <td> <?= $row["nrp"] ?> </td>
        <td> <?= $row["nrp"] ?> </td>
        <td> <?= $row["email"] ?> </td>
        <td> <?= $row["jurusan"] ?> </td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>

  </table>
</body>

</html>