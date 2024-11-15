<?php
$siswa = [
    ["nama" => "Ahmad Rifai", "kelas" => "XI RPL", "nilai" => ["UTS" => 88, "UAS" => 87]],
    ["nama" => "Budi Santoso", "kelas" => "XI RPL", "nilai" => ["UTS" => 80, "UAS" => 82]],
    ["nama" => "Citra Dewi", "kelas" => "XI RPL", "nilai" => ["UTS" => 85, "UAS" => 88]],
    ["nama" => "Dedi Pratama", "kelas" => "XI RPL", "nilai" => ["UTS" => 82, "UAS" => 84]],
    ["nama" => "Erna Fitri", "kelas" => "XI RPL", "nilai" => ["UTS" => 78, "UAS" => 80]],
    ["nama" => "Fajar Hidayat", "kelas" => "XI RPL", "nilai" => ["UTS" => 88, "UAS" => 91]],
    ["nama" => "Gilang Saputra", "kelas" => "XI RPL", "nilai" => ["UTS" => 87, "UAS" => 89]],
    ["nama" => "Hani Lestari", "kelas" => "XI RPL", "nilai" => ["UTS" => 90, "UAS" => 92]],
    ["nama" => "Irfan Maulana", "kelas" => "XI RPL", "nilai" => ["UTS" => 79, "UAS" => 81]],
    ["nama" => "Joko Riyadi", "kelas" => "XI RPL", "nilai" => ["UTS" => 84, "UAS" => 86]]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ikan">
    <table border ="1" width="500">
        <thead>
            <tr> 
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $nomor = 1;
                
                foreach($siswa as $item):
            ?>
            <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $item["nama"];?></td>
                <td><?=$item['kelas']?></td>
                <td><?=$item['nilai']['UTS']?></td>
                <td><?=$item['nilai']['UAS']?></td>
                <?php $nomor++?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</body>
</html>

