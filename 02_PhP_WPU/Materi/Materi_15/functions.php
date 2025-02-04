<?php
$conn = mysqli_connect("localhost", "root", "", "playground");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = upload(); // upload gambar
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO mahasiswa
              VALUES
              ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name']; // Get the file name
  $ukuranFile = $_FILES['gambar']['size']; // Get the file size
  $error = $_FILES['gambar']['error']; // Get the error code
  $tmpName = $_FILES['gambar']['tmp_name']; // Get the temporary file name

  // Check if no file is uploaded
  if ($error === 4) {
    echo "<script>
            alert('Pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  // Check if the uploaded file is an image
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png']; // Allowed image extensions
  $ekstensiGambar = explode('.', $namaFile); // Split the file name by the dot => namaFile.jpg => ['namaFile', 'jpg'] ->
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // Get the last element of the array and convert it to lowercase=> sandika.JPG => sandika.jpg

  // Check if the image extension is valid (.jpg, .jpeg, .png)
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script> 
            alert('Yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  // Check if the file size is too large (1MB)
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('Ukuran gambar terlalu besar!');
          </script>";
    return false;
  }

  // Generate a new name for the image
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  // var_dump($namaFileBaru); die; // Debugging

  // Move the uploaded file to the target directory
  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;
  $id = $data["id"];
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);
  // Check if the user uploaded a new image
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET
              nrp = '$nrp',
              nama = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa 
            WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
             ";
  return query($query);
}
?>