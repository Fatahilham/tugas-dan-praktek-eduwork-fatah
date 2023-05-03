<?php

$nilai = 95;

echo 'Nilai anda :  ';
switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        echo 'A <br/>';
        break;
    case ($nilai >= 80  && $nilai <= 90):
        echo 'B <br/>';
        break;
    case ($nilai >= 70 && $nilai <=  80):
        echo 'C <br/>';
        break;
    default:
        echo 'D';
}