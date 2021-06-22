<?php
include "config.php";
?>

<html lang="en">
<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Kütüphane | Anasayfa</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger pt-3 pb-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">My Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <?php
                 if (isset($_SESSION["Uye_TC_No"]) || isset($_SESSION["Calisan_TC_No"]))
                 {
                ?>
                     <a class="nav-link hosgeldin">Hoşgeldiniz <?php if (isset($_SESSION['Uye_Adi'])) {
                        echo $_SESSION['Uye_Adi']; 
                    } else {
                        echo 'Admin '.$_SESSION['Calisan_Adi']; ; 
                    } ?></a>
                    <?php
                 }
                    ?>
                    <?php
                    if (isset($_SESSION["Uye_TC_No"]) || isset($_SESSION["Calisan_TC_No"]))
                    {
    
                    ?>
                    <a class="nav-link" aria-current="page" href="logout.php">Çıkış Yap</a>
                    
                    <a class="nav-link" href="profile.php">Profil</a>
                    <?php
                    }
                    else {
                        ?>
                        <a class="nav-link" aria-current="page" href="login.php">Giriş Yap</a>
                    <a class="nav-link" href="signup.php">Kaydol</a>
                    
                    
                    <?php
                    }
                    ?>
                    <a class="nav-link" href="libraries.php">Kütüphaneler</a>
                    <a class="nav-link" href="books.php">Kitaplar</a>
                    <a class="nav-link" href="staff.php">Personeller</a>
                    <?php if (isset($_SESSION["Calisan_TC_No"])) {
                        ?>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Personel Menüsü
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="bookadd.php">Kitap Ekle</a></li>
                            <li><a class="dropdown-item" href="authoradd.php">Yazar Ekle</a></li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/1.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tüm Kütüphaneler Tek Sitede!</h5>
                    <p>Sitemizde birden çok kütüphanenin bilgilerine ulaşabilirsiniz.</p>

                    <div class="slider-btn">
                        <button class="btn btn-1"><a href="libraries.php">Kütüphaneler</a></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/2.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Haftanın Kitapları!</h5>
                    <p>Sizin için haftanın kitaplarını bir araya topladık!</p>

                    <div class="slider-btn">
                        <button class="btn btn-1"><a href="#">Haftanın Kitapları!</a></button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Önceki</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sonraki</span>
        </button>
    </div>

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

</body>
</html>
