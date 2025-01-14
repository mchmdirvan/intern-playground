<?php 

// Jenis kelamin = true artianya pria
$people = [
  [
      'name' => 'Diana Drusila',
      'age' => 31,
      'male' => false,
  ],
  [
      'name' => 'Nico Ranto',
      'age' => 28,
      'male' => true,
  ],
  [
      'name' => 'Edward Bona',
      'age' => 23,
      'male' => true,
  ],
  [
      'name' => 'Nikita Valerie',
      'age' => 17,
      'male' => false,
  ],
  [
      'name' => 'Bobby Kertanegara',
      'age' => 5,
      'male' => true,
  ],
];

function narasi($name, $age, $male)
{
  $gender = $male ? 'Pria' : 'Wanita';

  echo "Halo $name, saat ini umur anda adalah $age, dan anda berjenis kelamin $gender. <br>";
}

foreach ($people as $person) {
  narasi($person['name'], $person['age'], $person['male']);
}

?>