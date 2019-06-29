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
            break;
        case "testimoni":
            $page = "testimoni";
            echo '<link rel="stylesheet" href="asset/css/testimoni.css">';
            break;
        case "kontak_kami":
            $page = "kontak_kami";
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
                        <a class="dropdown-item" href="index.php?p=tentang_kami">TENTANG KAMI</a>
                        <a class="dropdown-item" href="index.php?p=masuk">MASUK</a>
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
                    default:
                        echo '<h1 class="btn-danger m-5">Halaman yang anda cari tidak ada !</h1>';
                        break;
                };
            }else{
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

let welcome = ['Selamat Datang',
                '<br>Di',
                '<br><br><span>APOTEK SYUKUR</span>',
                'Selamat Datang<br>Di<br><span>APOTEK SYUKUR</span><hr>'
            ];

window.addEventListener('load', function() {
    let typed = new Typed('.display-4', {
        strings: welcome,
        startDelay: 1000,
        backSpeed:110,
        fadeOut: true,
        fadeOutDelay: false,
        typeSpeed: 50,
        loop: true,
        loopCount: 2,
        showCursor: false
    });
});
    
</script>
</body>
</html>