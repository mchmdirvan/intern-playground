<?php
// Variable Scope
// Variable Scope adalah ruang lingkup sebuah variabel yang menentukan di mana variabel tersebut dapat diakses atau dimanipulasi.
// Variabel PHP memiliki 3 ruang lingkup:
// 1. Global Scope
// 2. Local Scope
// 3. Static Scope

// 1. Global Scope
// Variabel yang dideklarasikan di luar fungsi memiliki ruang lingkup global dan dapat diakses di mana saja dalam skrip PHP.
$x = 10; // global scope
echo $x;

// 2. Local Scope
// Variabel yang dideklarasikan di dalam fungsi hanya dapat diakses di dalam fungsi tersebut.
function tampilX()
{
  $x = 20; // local scope
  echo "Variable x inside function is: $x";
}



?>