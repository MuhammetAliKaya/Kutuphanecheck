<?php
include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {
  ?>

  <?php

$tut=$_POST["kitapisbani"];
$tut1=$_POST["bookname"];
$tut2=$_POST["bookauthor"];
$tut3=$_POST["tur"];
$tut4=$_POST["bookpage"];
$tut5=$_POST["bookcount"];
$tut6=$_POST["bookauthorsur"];
$tut8=$_POST["bookphoto"];

$flag1=1;

$sql="SELECT * FROM yazar";
$yazarbul=$baglan->query($sql);
while ($yazarbul1 =$yazarbul->fetch_assoc()) {
  if ($tut2==$yazarbul1["Yazar_Adi"] && $tut6==$yazarbul1["Yazar_Soyadi"]) {
   $tut7=$yazarbul1['Yazar_No'];
    $sql2 = "UPDATE yazar_kitap SET Kitap_ISBN =$tut,Yazar_No =$tut7  WHERE Kitap_ISBN =$tut";
    $sonuc = $baglan->query($sql2);
    $flag1=0;
    }
    if ($tut8!=NULL) {
      $sql4 = "UPDATE kitap SET Kitap_Kapak ='$tut8' WHERE ISBN_No =$tut";
    $sonuc = $baglan->query($sql4);
    }

}
if($flag1){
  echo'<script>alert("Tanımsız yazar! Lütfen önce bu yazarı ekleyiniz.");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=authoradd.php"/>';

}

$sql1 = "UPDATE kitap SET Kitap_Adi ='$tut1',Kitap_Sayfa_Sayisi ='$tut4',Kitap_Adedi ='$tut5'  WHERE ISBN_No =$tut";
$sql3 = "UPDATE kitap_tur SET Tur_No =$tut3,Kitap_ISBN =$tut  WHERE Kitap_ISBN =$tut";
if ($baglan->query($sql3) === TRUE) {
} else {
  echo "Error updating record: " . $baglan->error;
}

if ($baglan->query($sql1) === TRUE) {
  } else {
    echo "Error updating record: " . $baglan->error;
  }
  
if($flag1==0){
  echo'<script>alert("Değişiklikler kaydedildi!");</script>
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