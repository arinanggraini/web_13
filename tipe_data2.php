<?php 
//tipe data string
$x = "Selamat Siang Bos Muda!";
$y = 'Hello YinAyinn!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
var_dump($x); // cek tipe data
echo "<br>";

//tipe data integen
$huruf = 'A';
echo "$huruf <br>";
var_dump($huruf);
echo "<br>";

// tipe data floot
$decimal = 10.2;
echo "$decimal <br>";
var_dump($decimal);
echo "<br>";

//boolean 
$a = true;
var_dump($a);
echo "<br>";

$banding = $huruf < $decimal;
var_dump($banding);
echo "<br>";

$banding = $huruf > $decimal;
var_dump($banding);
?>
