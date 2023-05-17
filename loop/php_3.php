<?php
//$i untuk mendekralasikan variable dengan tujuan memberikan jumlah perulangan
for ($i = 0; $i <= 8; $i++) {
  //$j sebagai objek yang akan dilakukan perulangan
  for ($j = 0; $j <= $i; $j++) {
    echo $j; // echo untuk menampilkan variabel angka
  }
  echo "<br>";
}
?>