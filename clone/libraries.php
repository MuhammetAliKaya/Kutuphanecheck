<?php
include "config.php";
?>

<?php 
$kutuphane_sayisi = "SELECT * FROM kutuphane";
$kutuphane_sayi= $baglan->query($kutuphane_sayisi);
$kutuphane_sayi1=$kutuphane_sayi ->num_rows;
for ($i=1; $i <= $kutuphane_sayi1; $i++) {
    $bul_kutuphane= "SELECT * FROM kutuphane WHERE Kutuphane_No='$i'";
    $kutuphane= $baglan->query($bul_kutuphane);
    $kutuphane1= $kutuphane->fetch_assoc();
    $kutuphane_adi_dizi[$i]=$kutuphane1['Kutuphane_Adi'];
    $kutuphane_konum_dizi[$i]=$kutuphane1['Kutuphane_Konumu'];
    $kutuphane_saat_dizi[$i]=$kutuphane1['Kutuphane_Calisma_Saatleri'];
}
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css "
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .button1 {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    }
    .inputclass {
    background: #00cdac !important;
    border: none;
    color: #fff;
    justify-content: center;
    align-items: center;
    }
    </style>

    <title>My Library | Kütüphaneler</title>
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
                    <a class="nav-link active" href="libraries.php">Kütüphaneler</a>
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

    <!-- Container for All Books -->
    <div class="container mb-5 mt-5">
        <div class="row">
        <?php
            $kutuphane_sayisi = "SELECT * FROM kutuphane";
            $kutuphane_sayi= $baglan->query($kutuphane_sayisi);
            $kutuphane_sayi1=$kutuphane_sayi ->num_rows;
            for($i=1;$i<=$kutuphane_sayi1;$i++)
            {
                $bul_kutuphane= "SELECT * FROM kutuphane WHERE Kutuphane_No='$i'";
                $kutuphane= $baglan->query($bul_kutuphane);
                $kutuphane1= $kutuphane->fetch_assoc();
                $kutuphane_adi_dizi[$i]=$kutuphane1['Kutuphane_Adi'];
                $kutuphane_konum_dizi[$i]=$kutuphane1['Kutuphane_Konumu'];
                $kutuphane_calisma_saatleri_dizi[$i]=$kutuphane1['Kutuphane_Calisma_Saatleri'];
                $kutuphane_calisma_saatleri_dizi[$i]=$kutuphane1['Kutuphane_Calisma_Saatleri'];
                $kutuphane_calisma_saatleri_dizi[$i]=$kutuphane1['Kutuphane_Calisma_Saatleri'];
                
            ?>

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="./assets/libraryLogo/logo.png" alt="" class="rounded" width="150" height="150">
                        <h5><?php echo $kutuphane_adi_dizi[$i];?></h5>

                        <!-- Book İnfo -->
                        <!-- <div class="mt-3 info">
                            <span class="text1 d-block">
                            <?php echo $kutuphane_calisma_gunleri_dizi[$i];?></span>
                        </div> -->
                        <div class="mt-3 info">
                            <span class="text1 d-block"><?php echo $kutuphane_calisma_saatleri_dizi[$i];?></span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span><?php echo $kutuphane_konum_dizi[$i];?></span>
                            <div class="star mt-3 align-items-center">
                            </div>
                        </div>
                    </div>
                   

                    <!-- Button for Cards -->
                    <?php if (isset($_SESSION["Calisan_TC_No"])) {
                        ?>
             
                   <div class="p-3 book text-center text-white mt-3 mb-0 cursor ">
                   <form method="POST" action="libraryedit.php">
                    <input type="hidden" value="<?php echo  $kutuphane_adi_dizi[$i];?>" name="kutuphaneduzenleadi"/>
                    <input type="hidden" value="<?php echo $kutuphane_konum_dizi[$i];?>" name="kutuphaneduzenlekonum"/>
                    <input type="hidden" value="<?php echo $kutuphane_calisma_saatleri_dizi[$i];?>" name="kitaduzenleyazaradi"/>       
                    <input type="submit" class="inputclass" value="Kütüphaneyi Düzenle!" />
                    </form>
                    </div>
                    <!-- <div class="p-3 book text-center text-white cursor">
                        <span>Kütüphaneyi Sil!</span>

</div> -->
                    <?php
                    }
                    ?>
                    
                </div>
            </div>

            <!-- Card 1 ends -->
            <?php
            }
            ?>


        </div>
    </div>

    <!-- Container for All Books Ends -->

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

</body>

</html>
