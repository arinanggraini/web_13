<?php
$kata = "Hello Sayang";
echo "$kata <br>";

//fungsi strlen()
$cek = strlen ($kata);
echo "panjang karakter = $cek";
echo "<br>";

//fungsi str_word_count()
$cek = str_word_count ($kata);
echo "jumlah kata = $cek";
echo "<br>";

//fungsi strrev()
$cek = strrev($kata);
echo "kata balik = $cek";
echo "<br>";

//fungsi strpos()
$cek = strpos($kata, "Hello");
echo "kata hello ada di indeks = $cek";
echo "<br>";

//fungsi str_replace()
$cek = str_replace("World", "XII RPL 2",$kata);
echo "kata baru = $cek";
echo "<br>";


?>
