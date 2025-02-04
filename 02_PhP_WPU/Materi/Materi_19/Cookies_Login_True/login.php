<?php
session_start();

// Check cookies
if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // Set the session
      $_SESSION["login"] = true;
      // Check if the user wants to be remembered
      if (isset($_POST["remember"])) {
        // Create the cookie
        setcookie('login', 'true', time() + 60);
      }
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>

<body>
  <h1>Halaman Login</h1>

  <?php if (isset($error)): ?>
    <p style="color: red; font-style: italic;">Username / Password salah</p>
  <?php endif; ?>
  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember" id="remember">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>

</html>