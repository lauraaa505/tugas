<?php
$x = 15;
$y = 25;

echo "Sebelum : x = $x, y = $y<br>";

$x = $x + $y; 
$y = $x - $y; 
$x = $x - $y; 

echo "Setelah ditukar: x = $x, y = $y";
?>