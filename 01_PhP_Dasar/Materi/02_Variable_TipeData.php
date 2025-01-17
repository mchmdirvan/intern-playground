<?php 
$nama = "budi"; //string
$Nama = 'Hadi'; //string
var_dump($nama); //mengambil tipe data

$decimal = 10.5; //float
var_dump($decimal); //mengambil tipe data

$integer = 10; //int
var_dump($integer); //mengambil tipe data

$true = true; //boolean
$false = false; //boolean
var_dump($true); //mengambil tipe data

$null = null; //null
var_dump($null); //mengambil tipe data

$int = array('1','2','3','4','5','6') ; //array
$name = ["budi", "hadi", "joko"]; //array
var_dump($name); //mengambil tipe data

echo $name[0]; //mengakses array

echo $nama . " & " . $Nama;

$umur = 18;
$isMale = true;

echo "Halo $nama, umur anda sekarang $umur, dan laki2 = $isMale";
?>