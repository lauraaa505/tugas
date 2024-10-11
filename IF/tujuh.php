<?php
$pembelian = 60000;
$diskon = 0;
if ($pembelian >= 50000) {
    $diskon = 0.20 * $pembelian; 
}elseif ($pembelian >= 250000) {
    $diskon = 0.10 * $pembelian;
}elseif ($pembelian < 250000) {
    $diskon * $pembelian; 
}
echo "Anda Mendapatkan Diskon Sebesar : $diskon ";
  
?>