<?php
error_reporting(0);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css "
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .button1 {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.book1 {
    background: #9e9e9e !important;
}

.book2 {
    background: #ff9000 !important;
}

.book2:hover {
    opacity: .3;
}

.inputclass {
    background: #00cdac !important;
    border: none;
    color: #fff;
    justify-content: center;
    align-items: center;
}

.inputclass2 {
    background: #ff9000 !important;
    border: none;
    color: #fff;
    justify-content: center;
    align-items: center;
}

.spanclass {
    color: #fff;
    border: none;
    justify-content: center;
    align-items: center;
}
.odunc{
    color: red !important;
}
    </style>

    <title>My Library | Kitaplar</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3">
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
                    <a class="nav-link active" href="books.php">Kitaplar</a>
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
        if(isset($_SESSION["Uye_TC_No"])){
             $uyeno=$_SESSION["Uye_No"];
             $sql11="SELECT* FROM uye_odunc WHERE Uye_No=$uyeno AND Teslim_Etme_Tarihi=0";
              $Oduncal= $baglan->query($sql11);
             $Oduncal1= $Oduncal->fetch_assoc();
             }   
            $kitap_sayisi = "SELECT * FROM kitap";
            $kitap_sayi= $baglan->query($kitap_sayisi);
            $kitap_sayi1=$kitap_sayi ->num_rows;
            for($i=1;$i<=$kitap_sayi1;$i++)
            {
                
                $bul_kitap= "SELECT * FROM kitap WHERE Kitap_Sira='$i'";
                $kitap= $baglan->query($bul_kitap);
                $kitap1= $kitap->fetch_assoc();
                $kitap_adi_dizi[$i]=$kitap1['Kitap_Adi'];
                $kitap_sayfa_dizi[$i]=$kitap1['Kitap_Sayfa_Sayisi'];
                $kitap_isbn_dizi[$i]=$kitap1['ISBN_No'];
                $kitap_basim_yeri_dizi[$i]=$kitap1['Kitap_Basim_Yeri'];
                $kitap_basim_tarihi_dizi[$i]=$kitap1['Kitap__Basim_Tarihi'];
                // $kitap_stok_dizi=
                $kitap_kapak_dizi[$i]=$kitap1['Kitap_Kapak'];
                $kitap_yazar_nogetir="SELECT * FROM  yazar_kitap WHERE Kitap_ISBN='$kitap_isbn_dizi[$i]'";
            $kitap_yaz=$baglan->query($kitap_yazar_nogetir);
            $kitap_yazar=$kitap_yaz->fetch_assoc();
            $kitap_yazarlari[$i]=$kitap_yazar['Yazar_No'];
            $kitap_yazar_adgetir="SELECT * FROM  yazar WHERE yazar_no='$kitap_yazarlari[$i]'";
            $kitap_yazadi=$baglan->query($kitap_yazar_adgetir);
            $kitap_yazaradi=$kitap_yazadi->fetch_assoc();
            $kitap_yazarlari_adi[$i]=$kitap_yazaradi['Yazar_Adi']. " " .$kitap_yazaradi['Yazar_Soyadi'];
            $kitap_tur="SELECT * FROM kitap_tur RIGHT JOIN tur_listesi ON kitap_tur.Tur_No=tur_listesi.Tur_No WHERE kitap_tur.Kitap_ISBN='$kitap_isbn_dizi[$i]'";
            $kitap_tur_yaz=$baglan->query($kitap_tur);
            $kitap_turu=$kitap_tur_yaz->fetch_assoc();
            $kitap_turleri[$i]=$kitap_turu['Tur_Adi'];

            ?>
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="<?php echo $kitap_kapak_dizi[$i]?>" alt="" class="rounded" width="160" height="256">
                        <h5><?php echo "<b>" . $kitap_adi_dizi[$i] . "</b>"?></h5>

                        <!-- Book İnfo -->
                        <div class="mt-3 info">
                            <span class="text1 d-block"><?php echo $kitap_yazarlari_adi[$i]?></span>
                            <span class="text1 d-block mt-2"><?php echo $kitap_turleri[$i]?></span>
                        </div>
                        <div class="stock mt-3 text-dark">
                            <span><?php echo "<b>"."ISBN:". "</b>". " " .$kitap_isbn_dizi[$i]?></span><br>
                            <span><?php echo "<b>"."Sayfa Sayısı:". "</b>". " " .$kitap_sayfa_dizi[$i]?></span><br>
                            <span><?php echo "<b>"."Basım Tarihi:". "</b>"." " .$kitap_basim_tarihi_dizi[$i]?></span><br>
                            <span><?php echo "<b>"."Basım Yeri:". "</b>". " " .$kitap_basim_yeri_dizi[$i]?></span><br>
                            <span><?php echo "<b>"."Kitap Adedi:". "</b>". " " .$kitap1['Kitap_Adedi']?></span><br>
                            <br>
                            <?php
                            if ($kitap1['Kitap_Adedi']>0) {
                                ?>
                                <span><div class="fa fa-star"></div><b> Ödünç Alınabilir </b><div class="fa fa-star"></div></span>
                                <?php
                            }
                            else {
                                ?>
                                <span class="odunc"><div class="fa fa-star"></div><b> Ödünç Alınamaz </b><div class="fa fa-star"></div></span>
                                <?php
                            
                            }
                            ?>
                            
                            <div class="star mt-3 align-items-center">
                            </div>
                        </div>
                    </div>


                    <!-- Button for Cards -->
                    <?php 
                    if (isset($_SESSION["Calisan_TC_No"])) {
                    
                        ?>
                        
                    <div class="p-3 book text-center text-white mt-3 mb-0 cursor button1">
                    <form  method="POST" action="bookedit.php">      
                  
                    <input type="hidden" value="<?php echo $kitap_adi_dizi[$i];?>" name="kitapduzenleadi"/>
                    <input type="hidden" value="<?php echo $kitap_sayfa_dizi[$i];?>" name="kitapduzenlesayfa"/>
                    <input type="hidden" value="<?php echo $kitap_yazaradi['Yazar_Adi'];?>" name="kitaduzenleyazaradi"/>       
                    <input type="hidden" value="<?php echo $kitap_yazaradi['Yazar_Soyadi'];?>" name="kitaduzenleyazarsoyadi"/>                      
                    <input type="hidden" value="<?php echo $kitap1['Kitap_Adedi'];?>" name="kitaduzenlekitapadedi"/>
                    <input type="hidden" value="<?php echo $kitap_isbn_dizi[$i];?>" name="kitapduzenle"/> 
                    <input type="hidden" value="<?php echo $kitap_kapak_dizi[$i];?>" name="kitapduzenlekapak"/> 
                    <input type="submit" class="inputclass" value="Kitabı Düzenle"/>
                        </form>
                    </div>
                   <div class="p-3 book text-center text-white cursor">
                        <form  method="POST" action="bookdelete.php">
                        <input type="hidden" value="<?php echo $kitap_isbn_dizi[$i];?>" name="kitapsil"/>
                        <input type="submit" class="inputclass" value="Kitabı Sil"/>
                        </form>
                    </div>


                    <?php
                    }
                    ?>
                    <?php 
                     
                    if (isset($_SESSION["Uye_TC_No"]) && $Oduncal1["Kitap_ISBN"]!=$kitap_isbn_dizi[$i]) 
                    {
                    ?>
                   <div class="p-3 book text-center text-white mt-3 cursor">
                        <form  method="POST" action="bookborrow.php">
                        <input type="hidden" value="<?php echo $kitap_isbn_dizi[$i];?>" name="kitapisbn"/>
                        <input type="submit" class="inputclass" value="Ödünç Al"/>
                        </form>
                    </div>

                    <?php
                    }
                    else if(isset($_SESSION["Uye_TC_No"])){
                        ?>
                        <div class="button2 p-3 book1 text-center text-black mt-3 mb-0 cursor button1">
                        <span class="text-uppercase spanclass">Ödünç Alınamaz!</span>
                    </div>
                    <div class=" p-3 book2 text-center text-white mt-0 cursor">
                        <form  method="POST" action="giveback.php">
                        <input type="hidden" value="<?php echo $kitap_isbn_dizi[$i];?>" name="kitapisbn"/>
                        <input type="submit" class="inputclass2" value="Kitabı Geri Ver"/>
                        </form>
                    </div>
                    

                    <?php
                    }
                    ?>
                    

                    
                </div>
            </div>
            <?php
            }
            ?>

            <!-- Card 1 ends -->
        </div>
    </div>

    <!-- Container for All Books Ends -->

    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

</body>

</html>
