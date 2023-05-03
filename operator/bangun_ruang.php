<?php

//BALOK
$panjang = 10;
$lebar = 5;
$tinggi = 3;
$volume_balok = $panjang * $lebar * $tinggi;
echo "Volume balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah $volume_balok";
echo "<br>";

//TABUNG
$jari_jari = 7;
$tinggi = 10;
$pi = 3.14;
$volume_tabung = $pi * $jari_jari * $jari_jari * $tinggi;
echo "Volume tabung dengan jari-jari $jari_jari dan tinggi $tinggi adalah $volume_tabung";
echo "<br>";

//BOLA
$jari_jari = 5;
$pi = 3.14;
$volume_bola = 4 / 3 * $pi * $jari_jari * $jari_jari * $jari_jari;
echo "Volume bola dengan jari-jari $jari_jari adalah $volume_bola";

?>
