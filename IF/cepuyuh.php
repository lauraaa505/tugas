<?php
$angka1 = 35;
$angka2 = 25;
$angka3 = 15;
if ($angka1 >= $angka2 & $angka1 >= $angka3) {
    $terbesar = $angka1;
}elseif ($angka2 >= $angka1 & $angka2 >= $angka3) {
    $terbesar = $angka2;
}else {
    $terbesar = $angka3;
}
echo "Angka terbesar adalah $terbesar";
?>