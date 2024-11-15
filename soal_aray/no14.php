<?php
$siswa = [
    ["nama" => "Andi", "umur" => 20, "nilai" => 90],
    ["nama" => "Budi", "umur" => 22, "nilai" => 75],
    ["nama" => "Citra", "umur" => 21, "nilai" => 85],
];

for($i = 0; $i < 3; $i++) {
     for($j = $i+1; $j < 3; $j++) {
        if($siswa[$i]["nilai"]<$siswa[$j]["nilai"]) {
            $sementara = $siswa[$i];
            $siswa[$i] = $siswa[$j];
            $siswa[$j] = $sementara;
        }
     }
}
echo "Urutan siswa berdasarkan nilai: <br> ";
foreach($siswa as $item){
     echo $item["nama"]." - ".$item["nilai"]."<br>";
};
