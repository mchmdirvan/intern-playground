<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: lime;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
      transition: 1s;

    }

    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }
  </style>
</head>

<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
?>

<body>
  <?php for ($i = 0; $i < count($angka); $i++): ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
  <?php endfor; ?>
</body>

</html>