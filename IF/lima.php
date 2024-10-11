<?php
$tahun = 2004;
if ($tahun % 4 == 0 ){
    if($tahun % 400 == 0 ) {   
        echo "Tahun Kabisat";
    }elseif ($tahun % 100 != 0) {
        echo "Tahun Kabisat";
    }else{
        "Tidak Tahun Kabisat";
    }

    
        
}else{
    echo "Tidak tahun kabisat";
}
?>