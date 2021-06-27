<?php
include "config.php";
if (!(isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No']))) {
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

    <title>My Library | Giriş Yap</title>
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6">
                <img src="./assets/logo.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Giriş</h3>
                <form method="POST" action="login-do.php">
                    <div class="form-group">
                        <label for="citizenshipnumber">T.C. Kimlik Numarası</label>
                        <input type="text" name="citizenshipnumber" maxlength="11" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Beni Hatırla</label>
                    </div>
                    <input type="submit" class="btn btn-class" value="Giriş Yap">
                    <p>Hala Kayıt Olmadınız mı? <a href="signup.php">Kaydol</a></p>
                    <button class="btn mt-3 btn-class"><a href="books.php">Geri Dön</a></button>
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