<?php

//PERSEGI
$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas persegi dengan sisi $sisi adalah $luas_persegi";
echo "<br>";

//PERSEGI PANJANG
$panjang = 10;
$lebar = 5;
$luas_persegi_panjang = $panjang * $lebar;
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas_persegi_panjang";
echo "<br>";

//SEGITIGA
$alas = 10;
$tinggi = 5;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas_segitiga";
echo "<br>";

//LINGKARAN
$jari_jari = 7;
$pi = 3.14;
$luas_lingkaran = $pi * $jari_jari * $jari_jari;
echo "Luas lingkaran dengan jari-jari $jari_jari adalah $luas_lingkaran";
echo "<br>";

//TRAPESIUM
$alas1 = 5; 
$alas2 = 10; 
$tinggi = 8; 
$luas_trapesium = ($alas1 + $alas2) / 2 * $tinggi; 
echo "Luas trapesium dengan alas 1 sebesar $alas1, alas 2 sebesar $alas2, dan tinggi $tinggi adalah $luas_trapesium";


?>