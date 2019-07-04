<?php
include "../koneksi.php";
$nama = $_POST["nama"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];
$saran = $_POST["saran"];

$insert = mysqli_query($koneksi, "INSERT INTO kontak_kami VALUES(
                        null,
                        '$nama',
                        '$email',
                        '$nohp',
                        '$saran')");

if($insert){
    echo "
        <script>
            alert('Terimakasih ! Pesan dan Saran akan dikirimkan');
            window.location.href = '../index.php?p=kontak_kami';
        </script>
        ";
}
?>