<?php 
$barang = [
    ["nama" => "Buku", "kategori" => "Alat Tulis", "harga" => 20000],
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 500000],
];

foreach($barang as $item) {
    echo "Nama Barang: ".$item["nama"]." "." - Kategori: ".$item["kategori"]. " - Harga: ".$item["harga"]."<br>";
}
