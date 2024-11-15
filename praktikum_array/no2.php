<?php
$siswa = [
    "nama" => "Ahmad Rifai",
    "kelas" => "XI RPL",
    "nilai" => [
        [
            "mapel" => "Matematika",
            "Formatif" => 85,
            "Absensi" => 90,
            "UTS" => 88,
            "UAS" => 87
        ],
        [
            "mapel" => "Bahasa Inggris",
            "Formatif" => 78,
            "Absensi" => 95,
            "UTS" => 80,
            "UAS" => 82
        ],
        [
            "mapel" => "Bahasa Indonesia",
            "Formatif" => 83,
            "Absensi" => 92,
            "UTS" => 85,
            "UAS" => 88
        ],
        [
            "mapel" => "PKN",
            "Formatif" => 80,
            "Absensi" => 94,
            "UTS" => 82,
            "UAS" => 84
        ],
        [
            "mapel" => "Sejarah",
            "Formatif" => 75,
            "Absensi" => 96,
            "UTS" => 78,
            "UAS" => 80
        ],
        [
            "mapel" => "Basis Data",
            "Formatif" => 90,
            "Absensi" => 92,
            "UTS" => 88,
            "UAS" => 91
        ],
        [
            "mapel" => "Mobile Design",
            "Formatif" => 85,
            "Absensi" => 93,
            "UTS" => 87,
            "UAS" => 89
        ],
        [
            "mapel" => "PKK",
            "Formatif" => 88,
            "Absensi" => 94,
            "UTS" => 90,
            "UAS" => 92
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Daftar Nilai Siswa</h1>
    <h4>Nama: Ahmad Rifa | Kelas: XI RPL</h4>
    <div class="ijo">
    <table border = "1" width="500">
        <thead>
            <tr>
                <th>MATA PELAJARAN</th>
                <th>FORMATIF</th>
                <th>ABSENSI</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>NILAI AKHIR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($siswa['nilai'] as $ikan):
            ?>
            <tr>
            <td><?=$ikan['mapel']?></td>
                <td><?=$ikan['Formatif']?></td>
                <td><?=$ikan['Absensi']?></td>
                <td><?=$ikan['UTS']?></td>
                <td><?=$ikan['UAS']?></td> 
                <td><?= 0.1*$ikan['Absensi'] + 0.2*$ikan['Formatif'] + 0.3*$ikan['UTS'] + 0.4*$ikan['UAS']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</body>
</html>