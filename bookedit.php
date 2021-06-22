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

    <title>My Library | Kitap Düzenle</title>
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6">
                <img src="./assets/logo.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Kitap Düzenle</h3>
                <form  method="POST" action="bookedit-do.php">
                    <div class="form-group">
                        <label for="name">Kitap Adı</label>
                        <input type="text" name="bookname" class="form-control" value="<?php echo $_POST["kitapduzenleadi"];?>">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Adı</label>
                        <input type="text" name="bookauthor" class="form-control" value="<?php echo $_POST["kitaduzenleyazaradi"];?>">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Soyadı</label>
                        <input type="text" name="bookauthorsur" class="form-control"value="<?php echo $_POST["kitaduzenleyazarsoyadi"];?>">
                    </div>
                    <div class="form-group">
                        <label for="surname" >Sayfa Sayısı</label>
                        <input type="text" name="bookpage" class="form-control"value="<?php echo $_POST["kitapduzenlesayfa"];?>" >
                    </div>
                    <div class="form-group">
                        <label for="surname" >Kitap Adedi</label>
                        <input type="text" name="bookcount" class="form-control" value="<?php echo $_POST["kitaduzenlekitapadedi"];?>">
                    </div>
                    <div class="form-group">
                        <label for="surname">Kitap Fotoğraf Bağlantısı</label>
                        <input type="text" name="bookphoto" class="form-control" value="<?php echo $_POST["kitapduzenlekapak"];?>">
                    </div>
                    <!-- <div class="form-group">
                        <label for="surname">Kitap Türü</label>
                        <input type="text" name="bookgenre" class="form-control">
                    </div> -->
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
                    <div>
                    <input type="hidden" value="<?php echo $_POST["kitapduzenle"];?>" name="kitapisbani"/>
                    <input type="submit" name="bookedit" class="btn btn-class mt-4" value="Kitabı Düzenle">
                    <br>
                    <button class="btn mt-3 btn-class"><a href="books.php">Geri Dön</a></button>
                </form>
                </div>
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