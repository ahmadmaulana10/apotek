<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "apotek_syukur";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "Gagal Koneksi ke DB : " . mysqli_connect_error();
}
?>