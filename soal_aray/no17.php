<?php
$angka = 
    [12, 45, 78, 3, 56];

$terbesar = $angka[0];
$terkecil = $angka[0];

foreach($angka as $ikan){
    if ($ikan > $terbesar){
        $terbesar = $ikan;
    }
}

echo "Nilai terbesar: " . $terbesar;
foreach($angka as $ijo){
    if ($ijo < $terkecil){
        $terkecil = $ijo;
    }
}

echo "<br>Nilai terkecil: ". $terkecil
?>