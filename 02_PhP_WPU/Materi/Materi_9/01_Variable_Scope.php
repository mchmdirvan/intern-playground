<?php
// Variable Scope
// Variable Scope adalah ruang lingkup sebuah variabel yang menentukan di mana variabel tersebut dapat diakses atau dimanipulasi.
// Variabel PHP memiliki 3 ruang lingkup:
// 1. Local Scope
// 2. Global Scope
// 3. Static Scope

// 1. Local Scope
// Variabel yang dideklarasikan di dalam fungsi hanya dapat diakses di dalam fungsi tersebut.
function myFunction()
{
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}


?>