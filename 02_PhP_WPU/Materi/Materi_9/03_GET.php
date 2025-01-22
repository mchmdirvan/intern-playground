<?php
// $_GET
// $_GET adalah variabel superglobal PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "get".
// $_GET juga dapat mengumpulkan data yang dikirim dalam URL.
// Data yang dikirimkan dengan metode GET akan terlihat di URL, dan nilai yang dikirimkan akan terlihat di URL setelah tanda "=".
// Contoh: http://localhost/02_PhP_WPU/Materi/Materi_9/03_GET.php?nama=Joni&umur=20
// $_GET adalah array asosiatif, yang berarti variabel dalam $_GET diakses dengan menggunakan nama kunci (nama variabel).
// Contoh: 
$_GET["nama"] = "Sandika Galih";
var_dump($_GET);
?>