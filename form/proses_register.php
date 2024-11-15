<?php
if (isset($_POST['nama_pengguna']) && isset($_POST['username']) && isset($_POST['password'])) {

    if (strlen($_POST['username']) < 6 || strlen($_POST['password']) < 8)  {
        echo "<br>Username minimal 6 karakter";
    } else if (strlen($_POST['password']) < 8) {
        echo "<br>Password minimal 8 karakter";
    } else {
        echo "Nama Lengkap : " . $_POST['nama_pengguna'];
        echo "<br>Username : " . $_POST['username'];
        $ikan = md5($_POST['password']);
        echo "<br>Password : " . $ikan;
    }

} else {
    echo "Data Tidak Lengkap";
}


?>