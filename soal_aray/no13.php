<?php
$produk = [
    "buku" => 15,
    "pensil" => 5,
    "laptop" => 12,
    "tas" => 8
];
echo "Produk yang stoknya lebih dari 10: <br>";

foreach ($produk as $data => $nilai)
if ($nilai > 10) {
    echo "$data <br>";
}
