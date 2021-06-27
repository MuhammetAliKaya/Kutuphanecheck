<?php
include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css">

    <title>My Library | Kitap Ekle</title>
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6">
                <img src="./assets/logo.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Kitap Ekle</h3>
                <form method="POST" action="bookadd-db.php">
                    <div class="form-group">
                        <label for="surname">ISBN Numarası</label>
                        <input type="text" name="bookisbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Kitap Adı</label>
                        <input type="text" name="bookname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Kitap Sayfa Sayısı</label>
                        <input type="text" name="bookpage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Kitap Adedi</label>
                        <input type="text" name="bookamount" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Kitap Basım Tarihi</label>
                        <input type="text" name="bookdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Kitap Basım Yeri</label>
                        <input type="text" name="bookplace" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Kitap Fotoğraf Bağlantısı</label>
                        <input type="text" name="bookphoto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Adı</label>
                        <input type="text" name="bookauthorname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Soyadı</label>
                        <input type="text" name="bookauthorsurname" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                    <label for="surname">Tür Seçiniz:</label>
                    <select name="tur" id="turler">
                    <?php
                     $tur_sayisi = "SELECT * FROM tur_listesi";
                     $tur_sayi= $baglan->query($tur_sayisi);
                     $tur_sayi1=$tur_sayi ->num_rows;

                    for ($i=1; $i <= $tur_sayi1; $i++) { 
                        $bul_tur= "SELECT * FROM tur_listesi WHERE Tur_No='$i'";
                        $tur= $baglan->query($bul_tur);
                        $tur1= $tur->fetch_assoc();
                        $tur_dizi[$i]=$tur1['Tur_Adi'];
                    ?>

                   <option value="<?php echo $i; ?>"><?php echo $tur_dizi[$i];?></option>
<?php
 }
?>

</select>
                    </div>

                    <div class="form-group mt-2">
                    <label for="surname">Kütüphane Seçiniz:</label>
                    <select name="kutuphane" id="kutuphaneler">
                    <?php
                     $kutuphane_sayisi = "SELECT * FROM kutuphane";
                     $kutuphane_sayi= $baglan->query($kutuphane_sayisi);
                     $kutuphane_sayi1=$kutuphane_sayi ->num_rows;

                    for ($i=1; $i <= $kutuphane_sayi1; $i++) { 
                        $bul_kutuphane= "SELECT * FROM kutuphane WHERE Kutuphane_No='$i'";
                        $kutuphane= $baglan->query($bul_kutuphane);
                        $kutuphane1= $kutuphane->fetch_assoc();
                        $kutuphane_dizi[$i]=$kutuphane1['Kutuphane_Adi'];
                    ?>

                   <option value="<?php echo $i; ?>"><?php echo $kutuphane_dizi[$i];?></option>
<?php
 }
?>

</select>
                    </div>
                    <div>
                    <input type="submit" name="bookadd" class="btn btn-class mt-4" value="Kitabı Ekle">
                    </div>
                    <div>
                    <button class="btn mt-3 btn-class"><a class="text-decoration-none geridon" href="books.php">Geri Dön</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
}
else {
    echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>