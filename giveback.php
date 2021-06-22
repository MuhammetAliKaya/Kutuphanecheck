<?php
error_reporting(0);
include "config.php";
if (isset($_SESSION['Uye_TC_No'])) {
?>

<?php
$uyeno=$_SESSION["Uye_No"];
$teslimtarihi=date('d/m/Y H:i:s');
$kitapisbn=$_POST['kitapisbn'];
echo $teslimtarihi;
$sql12="SELECT * FROM kitap WHERE ISBN_No=$kitapisbn";
$kitapsayi=$baglan->query($sql12);
$kitapsayidus=$kitapsayi->fetch_assoc();
$tut=$kitapsayidus['Kitap_Adedi'];
$tut2=$tut + 1;
$sql2 = "UPDATE uye_odunc SET Teslim_Etme_Tarihi = '$teslimtarihi' WHERE Teslim_Etme_Tarihi='0' AND Uye_No='$uyeno'";
// $sonuc=$baglan->query($sql2);

if ($baglan->query($sql2) === TRUE ) {
  $sql2="UPDATE kitap SET Kitap_Adedi =$tut2  WHERE ISBN_No =$kitapisbn";
  $sonuc2=mysqli_query($baglan,$sql2);
    echo '<script>alert("Kitabı teslim ettiniz!");</script>
   <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>';
   
  } else {
    echo "Error deleting record: " . $baglan->error;
  }







?>

<?php
}
else {
  echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
  <meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>