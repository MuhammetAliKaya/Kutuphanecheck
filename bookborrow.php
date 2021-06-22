<?php
// error_reporting(0);
include "config.php";
if (isset($_SESSION['Uye_TC_No'])) {
?>

<?php
$flag1=1;
$oduncalmatarihi=date('d/m/Y H:i:s');
$uyeno=$_SESSION["Uye_No"];
$kitapisbn=$_POST['kitapisbn'];

$sql11="SELECT* FROM uye_odunc WHERE Uye_No=$uyeno";
$Oduncal= $baglan->query($sql11);
$sql12="SELECT * FROM kitap WHERE ISBN_No=$kitapisbn";
$kitapsayi=$baglan->query($sql12);
$kitapsayidus=$kitapsayi->fetch_assoc();
$tut=$kitapsayidus['Kitap_Adedi'];
$tut2=$tut - 1;

while($Oduncal1= $Oduncal->fetch_assoc()){
if($Oduncal1['Teslim_Etme_Tarihi']==0){
$flag1=0;
}
}

if($flag1 && $tut>0){
    $sql2="UPDATE kitap SET Kitap_Adedi =$tut2  WHERE ISBN_No =$kitapisbn";
    $sonuc2=mysqli_query($baglan,$sql2);
$sql1="INSERT INTO uye_odunc(Uye_No,Kitap_ISBN,Odunc_Alma_Tarihi)values('".$_SESSION["Uye_No"]."','".$_POST["kitapisbn"]."','".$oduncalmatarihi."')";
$sonuc1=mysqli_query($baglan,$sql1);


echo'<script>alert("Kitap ödünç alındı!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>';
}

else if($tut == 0){
    echo'<script>alert("Kitap tükendi");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>';
}
else{
    echo'<script>alert("Önce aldığınız kitabı teslim ediniz!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>';


}
?>

<?php
}
else {
    echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>