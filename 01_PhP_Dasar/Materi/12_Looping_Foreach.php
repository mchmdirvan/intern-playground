<?php 
// Foreach
// Struktur kendali perulangan yang
// digunakan untuk mengulang kode yang
// ditentukan sebanyak jumlah tertentu
// pada array

// Syntax
// foreach ($array as $value) {
//     statement; // kode yang akan dijalankan
// }


$fruits = ['Apel', 'Jeruk', 'Mangga'];

//Dengan Looping For
for ($i = 0; $i < count($fruits); $i++) {
    echo 'Ini buah'. $fruits[$i] . '<br>';
}

foreach ($fruits as $fruit) {
    echo "Ini buah $fruit <br>";
}
?>