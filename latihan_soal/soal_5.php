<?php

$golongan = 2;

switch (true) {
    case ($golongan == 1):
        echo "Rp5.000.000";
    break;
    case ($golongan == 2):
        echo "Rp4.000.000";
    break;
    case ($golongan == 3):
        echo "Rp3.000.000";
    break;
    case ($golongan == 4):
        echo "Rp2.000.000";
    break;
    default:
    echo "Gaada uang";
}