<?php

$siswa =[
    "Andi" => 80,
    "Budi" => 75,
    "Citra" => 90,
];

$totalNilai = 0;
$jumlah = count($siswa);

foreach($siswa as $nilai) {
    $totalNilai += $nilai;
}
$rataRata = $totalNilai / $jumlah;

echo "Rata-rata nilai: ".$rataRata;