<?php

include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {

?>
<?php
$tut=$_POST["kitapsil"];
//echo $tut;


// $sql="DELETE  FROM kitap WHERE Kitap_Sira=24";
// $sonuc=$baglan->query($sql);
$kitap_sayisi = "SELECT * FROM kitap";
$kitap_sayi= $baglan->query($kitap_sayisi);
$kitap_sayi1=$kitap_sayi ->num_rows;

$bul_kitap= "SELECT * FROM kitap WHERE ISBN_No='$tut'";
$kitap= $baglan->query($bul_kitap);
$kitap1= $kitap->fetch_assoc();

$kitap_sira=$kitap1["Kitap_Sira"];
     


$sql1 = "DELETE FROM yazar_kitap WHERE Kitap_ISBN=$tut";
$sql2 = "DELETE FROM kitap_tur WHERE Kitap_ISBN=$tut";
$sql3 = "DELETE FROM kitap_kutuphane WHERE Kitap_ISBN=$tut";
$sql4 = "DELETE FROM kitap WHERE ISBN_No=$tut";
$sql5 =  "DELETE FROM uye_odunc WHERE Kitap_ISBN=$tut";
$sonuc1=$baglan->query($sql1);
$sonuc2=$baglan->query($sql2);
$sonuc3=$baglan->query($sql3);
$sonuc5=$baglan->query($sql5);
if ($baglan->query($sql4) === TRUE) {
    echo'<script>alert("Silme işlemi başarıyla tamamlandı!");</script>
        <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>';
  } else {
    echo "Error deleting record: " . $baglan->error;
  }


  if($kitap_sayi1!=$kitap_sira){
    $sql6 = "UPDATE kitap SET Kitap_Sira =$kitap_sira  WHERE Kitap_Sira =$kitap_sayi1 ";
    $sonuc4=$baglan->query($sql6);

  }


//   for($i=$kitap_sira;$i<=$kitap_sayi1-1;$i++){
//     $sql6 = "UPDATE kitap SET Kitap_Sira = '$i' WHERE Kitap_Sira = ($i+1)";
//     $sonuc4=$baglan->query($sql6);
// }


?>

<?php
}
else {
  echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
  <meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>
