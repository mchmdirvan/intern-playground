<!-- 
Tugas 5
Buatlah program berdasarkan materi yang sudah diberikan, minimal menggunakan 2 kombinasi materi 
-->

<?php
   function isPrime($number) {
       if ($number < 2) {
           return false;
       }
       for ($i = 2; $i <= sqrt($number); $i++) {
           if ($number % $i == 0) {
               return false;
           }
       }
       return true;
   }
   
   $numbers = [5, 10, 17, 20, 23];
   
   foreach ($numbers as $number) {
       if (isPrime($number)) {
           echo "$number adalah bilangan prima.\n";
       } else if ($number % 2 == 0) {
           echo "$number adalah bilangan genap dan bukan bilangan prima.\n";
       } else {
           echo "$number adalah bilangan ganjil dan bukan bilangan prima.\n";
       }
   }
   
?>