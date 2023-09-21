<?php 
//tipe data string
$x = "Hello Dek!";
$y = 'Hello Sayang!';

echo $x;
echo "<br>"; 
echo $y;
echo "<br>";
var_dump($x); //cek tipe data
echo "<br>";

//tipe data integen
$angka = -6 ;
echo "$angka <br>";
var_dump($angka);
echo "<br>";

// tipe data floot
$decimal = 6.9;
echo "$decimal <br>";
var_dump($decimal);
echo "<br>";

//boolean
$c = true;
var_dump($c);
echo "<br>";

$banding = $angka > $decimal;
var_dump($banding);
echo "<br>";

$banding = $angka < $decimal;
var_dump($banding);
echo "<br>";

// tipe data array
$buah = array ("Durian", "Melon",
 "Semangka");
var_dump($buah);
echo "<br>";

// tipe data null
$nama = "YinAyinn";
$nama = null;
var_dump($nama);

?>