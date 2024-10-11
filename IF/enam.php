<?php
$nilai = 60;
if($nilai >= 85) {
    echo "A";
}elseif($nilai >= 75) {
    echo "B";
}elseif($nilai >= 65) {
    echo "C";
}elseif($nilai >= 50) {
    echo "D";
}elseif($nilai < 50) {
    echo "E";
}else {
    echo "F";
}
?>