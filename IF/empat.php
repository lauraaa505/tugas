<?php
$usia = 60;
if($usia <= 12) {
    echo "Anak-anak";
}elseif ($usia <= 17) {
    echo "Remaja";
}elseif ($usia <= 50) {
    echo "Dewasa";
}elseif ($usia > 50) {
    echo "Lanjut Usia";
}else{
    echo "sisanya tua";
}
?>