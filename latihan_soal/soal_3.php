<?php

$bulan = 5;
switch (true) {
    case ($bulan < 3):
        echo "Musim Dingin";
    break;
    case ($bulan < 6):
        echo "Musim Semi";
    break;
    case ($bulan < 9):
        echo "Musim Panas";
    break;
    case ($bulan < 12):
        echo "Musim Gugur";
    break;
    default:
    echo "Kemarau";
}