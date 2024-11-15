<?php

$siswa = [
    "Andi" => 80,
    "Budi" => 60,
    "Citra" => 85,
    "Doni" => 50
];

$totalNilai = 0;
foreach($siswa as $nama => $nilai) {
    $totalNilai += $nilai;
}

// menghitung rata rata nilai siswa
$rata = $totalNilai/count( $siswa);

// mencari siswa
$siswa_remed ="";
foreach($siswa as $nama => $nilai){
    if ($nilai < $rata){
        $siswa_remed = $siswa_remed. " $nama, ";

    }
}

echo "Siswa yang nilainya kurang dari rata rata adalah: $siswa_remed";