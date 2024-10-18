<?php

$hari = 3;
switch (true) {
    case($hari == 1):
        echo "Senin";
    break;
    case ($hari == 2):
        echo "Selasa";
    break;
    case ($hari == 3):
        echo "Rabu";
    break;
    case ($hari == 4):
        echo "Kamis";
    break;
    case ($hari == 5):
        echo "Jumat";
    break;
    case ($hari == 6):
        echo "Sabtu";
    break;
    case ($hari == 7):
        echo "Minggu";
    break;
    default:
    echo "tidak terdaftar";
}