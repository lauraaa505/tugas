<?php

$siswa = [
    ["nama" => "Andi", "kelas" => "X", "nilai" => 78],
    ["nama" => "Budi", "kelas" => "XI", "nilai" => 85],
    ["nama" => "Citra", "kelas" => "XII", "nilai" => 70]
];
$keseluruhan = 0;
foreach ($siswa as $data)
if ($data["nilai"] > 75) {
    $keseluruhan++;
}
echo "Jumlah siswa dengan nilai diatas 75 : $keseluruhan";