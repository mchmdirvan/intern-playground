<?php
// Operator Increment
// Operator increment digunakan untuk menambahkan nilai pada variabel
// Operator increment terdiri dari:
// ++$a : pre-increment (menambahkan nilai sebelum variabel diproses)
// $a++ : post-increment (menambahkan nilai setelah variabel diproses)
// --$a : pre-decrement (mengurangkan nilai sebelum variabel diproses)
// $a-- : post-decrement (mengurangkan nilai setelah variabel diproses)

$a = 5;
$b = ++$a;
var_dump( $b ); // 6
?>