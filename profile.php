<?php
include "config.php";
if (isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No'])) {
?>

<?php

if (isset($_SESSION["Calisan_TC_No"])) {
      $isim=$_SESSION["Calisan_Adi"]." ".$_SESSION["Calisan_Soyadi"];
      $mail=$_SESSION["Calisan_Mail"];
      $telno=$_SESSION["Calisan_Tel_No"];
      $adres=$_SESSION["Calisan_Adres"];


}
if (isset($_SESSION["Uye_TC_No"])) {
  $isim1=$_SESSION["Uye_Adi"];
  $mail1=$_SESSION["Uye_Mail"];
  $telno1=$_SESSION["Uye_Tel_No"];
  $adres1=$_SESSION["Uye_Adres"];


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>My Library | Profil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./assets/favicon.ico">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profile.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <a class="nav-link" aria-current="page" href="logout.php">Çıkış Yap</a>
          <a class="nav-link active" href="profile.php">Profil</a>
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
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="main-body">
      <!-- İkon & Ad Soyad -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                  width="150">
                <div class="mt-3">
                  <h4><?php  
                  if (isset($_SESSION["Calisan_TC_No"])) {
                    echo $isim;
                  }
                  if (isset($_SESSION["Uye_TC_No"])) {
                    echo $isim1;
                  }
                  
                  ?></h4>
                </div>
              </div>
            </div>
          </div>

          <!-- Genel Bilgiler -->

          <div class="card mt-3">
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Ad - Soyad</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php  
                  if (isset($_SESSION["Calisan_TC_No"])) {
                    echo $isim;
                  }
                  if (isset($_SESSION["Uye_TC_No"])) {
                    echo $isim1;
                  }
                  
                  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php  
                  if (isset($_SESSION["Calisan_TC_No"])) {
                    echo $mail;
                  } if (isset($_SESSION["Uye_TC_No"])) {
                    echo $mail1;
                  }
                  
                  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Telefon Numarası</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php  
                  if (isset($_SESSION["Calisan_TC_No"])) {
                    echo $telno;
                  } if (isset($_SESSION["Uye_TC_No"])) {
                    echo $telno1;
                  }
                  
                  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Adres</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php  
                  if (isset($_SESSION["Calisan_TC_No"])) {
                    echo $adres;
                  }
                  if (isset($_SESSION["Uye_TC_No"])) {
                    echo $adres1;
                  }
                  
                  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info "
                    href="changepassword.php">Şifremi Değiştir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script type="text/javascript">

  </script>
</body>

</html>

<?php
}
else {
  echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
  <meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>