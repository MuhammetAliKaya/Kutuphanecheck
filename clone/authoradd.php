<?php
error_reporting(0);
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

    <title>My Library | YAZAR EKLE</title>
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6">
                <img src="./assets/logo.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Yazar Ekle</h3>
                <form method="POST" action="authoradd-do.php">
                    <div class="form-group">
                        <label for="name">Yazar Adı</label>
                        <input type="text" name="authorname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Soyadı</label>
                        <input type="text" name="authorsurname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Milliyeti</label>
                        <input type="text" name="authormilliyet" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="surname">Yazar Doğum Tarihi</label>
                        <input type="date" name="authorbirthdate" class="form-control">
                    </div>
                    <input type="submit" name="authoradd" class="btn btn-class mt-3" value="Yazarı Ekle">
                    <div>
                    <button class="btn mt-3 btn-class"><a class="text-decoration-none geridon" href="index.php">Geri Dön</a></button>
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