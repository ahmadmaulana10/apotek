<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/style.css">

<?php
if(isset($_GET["p"])){
    $page = $_GET["p"];
    switch($page){
        case "beranda":
            $page = "beranda";
            break;
        case "galeri":
            $page = "galeri";
            echo '<link rel="stylesheet" href="asset/css/galeri.css">';
            break;
        case "testimoni":
            $page = "testimoni";
            echo '<link rel="stylesheet" href="asset/css/testimoni.css">';
            break;
        case "kontak_kami":
            $page = "kontak_kami";
            break;
        case "masuk":
            $page = "masuk";
            break;
        case "tentang_kami":
            $page = "tentang_kami";
            echo '<link rel="stylesheet" href="asset/css/tentang_kami.css">';
            break;
    }
}
?>
<title>Apotek</title>
</head>
<body>
    
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php?p=beranda">
            <img src="asset/img/logo_apotek.png" width="75" height="75" alt="Logo Apotek">
            <span style="font-weight:bold">APOTEK SYUKUR</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($page==="beranda" or $page == "") echo "active";?>">
                    <a class="nav-link" href="index.php?p=beranda">BERANDA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($page === "galeri") echo "active";?>">
                    <a class="nav-link" href="index.php?p=galeri">GALERI</a>
                </li>
                <li class="nav-item <?php if($page === "testimoni") echo "active";?>">
                    <a class="nav-link" href="index.php?p=testimoni">TESTIMONI</a>
                </li>
                <li class="nav-item <?php if($page === "kontak_kami") echo "active";?>">
                    <a class="nav-link" href="index.php?p=kontak_kami">KONTAK KAMI</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LAINNYA <span class="dropdown-toggle"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item <?php if($page === "tentang_kami") echo "disabled";?>" href="index.php?p=tentang_kami">TENTANG KAMI</a>
                        <a class="dropdown-item <?php if($page === "masuk") echo "disabled";?>" href="index.php?p=masuk">MASUK</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->



<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <?php
            if(isset($_GET["p"])){
                $p = $_GET["p"];
                switch($p){
                    case 'beranda':
                        $p = "beranda";
                        echo '<h1 class="display-4"></h1>';
                        break;
                    case 'galeri':
                        include "galeri.php";
                        break;
                    case 'testimoni':
                        include "testimoni.php";
                        break;
                    case 'kontak_kami':
                        include "kontak_kami.php";
                        break;
                    case 'tentang_kami':
                        include "tentang_kami.php";
                        break;
                    case 'masuk':
                        include "masuk.php";
                        break;
                    default:
                        echo '<h1 class="btn-danger m-5">Halaman yang anda cari tidak ada !</h1>';
                        break;
                };
            }else{
                $p = "kosong";
                echo '<h1 class="display-4"></h1>';
            }
        ?>
    </div>
</div>
<!-- Akhir Jumbotron -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="asset/js/jquery-3.3.1.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/typed.js"></script>
<script>
<?php
if($p == "beranda" OR $p == "kosong") include "pesan_beranda.js";
?>
</script>
</body>
</html>