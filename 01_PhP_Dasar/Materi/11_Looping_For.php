<?php 
// For
// Struktur kendali perulangan yang
// digunakan untuk mengulang kode yang
// ditentukan sebanyak jumlah tertentu

// Syntax
// for (initialization; condition; increment) {
//     statement; // kode yang akan dijalankan
// }

// Perulangan Tanpa Henti
// for (;;) {
//     echo 'Perulangan tanpa henti';
// }

// Perulangan dengan Kondisi
// $counter = 1;
// for (; $counter <= 10; ) {
//     echo "Perulangan ke-$counter <br>";
//     $counter++;
// }

// Perulangan dengan Init Statement
// for ($counter = 1; $counter <= 10; ) {
//     echo "Perulangan ke-$counter <br>";
//     $counter++;
// }

// Perulangan dengan Post Statement 
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Perulangan ke-$counter <br>";
// }

for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}
