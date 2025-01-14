<!-- 
Tugas 5
Buatlah program berdasarkan materi yang sudah diberikan, minimal menggunakan 2 kombinasi materi 
-->

<?php
    $a = 5;
    $b = 3;
    $t = 10;
    $volume = 0.5 * $a * $b * $t;
    echo "Volume dari prisma segitiga adalah $volume cm\n";

    $angka = 7;
    $count = 0;
    for ($i = 1; $i <= $angka; $i++) {
        if ($angka % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        echo "$angka adalah bilangan prima\n";
    } else {
        echo "$angka bukan bilangan prima\n";
    }
?>