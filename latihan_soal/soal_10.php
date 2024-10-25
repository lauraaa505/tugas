<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j; // Menghitung perkalian
        echo "<td>$hasil</td>"; // Menampilkan hasil perkalian
    }
    
    echo "</tr>";
}

echo "</table>";
