<?php
error_reporting(0);
include "config.php";
if (isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No'])) {
?>

<?php

if (isset($_SESSION["Calisan_TC_No"])) {
    $eskisifre=$_SESSION['Calisan_Sifre'];
$adi=$_SESSION['Calisan_TC_No'];
$yenisifre=$_POST['newpass1'];
// $sql1="SELECT * FROM calisan WHERE Calisan_Sifre=$eskisifre";

$sql2="UPDATE calisan SET Calisan_Sifre ='$yenisifre' WHERE Calisan_Sifre ='$eskisifre' AND Calisan_TC_No='$adi'";
if ($baglan->query($sql2)) {
    echo "kayıt yapıldı";
    include "logout.php";

}
else {
    echo "Error deleting record: " . $baglan->error;
}
}



if (isset($_SESSION["Uye_TC_No"])) {
    $eskisifre=$_SESSION['Uye_Sifre'];
$adi=$_SESSION['Uye_TC_No'];
$yenisifre=$_POST['newpass1'];
// $sql1="SELECT * FROM Uye WHERE Uye_Sifre=$eskisifre";

$sql2="UPDATE uye SET Uye_Sifre='$yenisifre' WHERE Uye_Sifre='$eskisifre' AND Uye_TC_No='$adi'";
if ($baglan->query($sql2)) {
    echo "kayıt yapıldı";
    include "logout.php";}
else {
    echo "Error deleting record: " . $baglan->error;
}
}




?>

<?php
}
else {
    echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>