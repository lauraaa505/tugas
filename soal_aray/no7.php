<?php

$hargaBarang = [
    "Buku" => 20000,
    "Pensil" => 5000,
    "Penhapus" => 3000,
    "Pulpen" => 7000,
    "Penggaris" => 10000
];

foreach($hargaBarang as $barang => $harga) {
    echo "Barang: ".$barang. ", Harga: ".$harga. "<br>";
}