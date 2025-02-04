<?php
// konek ke database
$conn = mysqli_connect("localhost", "root", "", "playground");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // var_dump($_POST); // to check if the data is sent
  $nrp = $_POST['nrp'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $gambar = $_POST['gambar'];

  // query insert data
  $query = "INSERT INTO mahasiswa
              VALUES
              ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
            ";
  mysqli_query($conn, $query);

  // cek apakah data berhasil ditambahkan atau tidak
  // var_dump(mysqli_affected_rows($conn)); // to check if the data is added

  if (mysqli_affected_rows($conn) > 0) {
    echo "Data berhasil ditambahkan!";
  } else {
    echo "Data gagal ditambahkan!";
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

  <form action="" method="post">
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
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>