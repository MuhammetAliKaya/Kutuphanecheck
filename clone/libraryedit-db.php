<?php

include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {
  
?>

<?php
$tut1=$_POST['libraryname'];
$tut2=$_POST['libraryadress'];
$tut3=$_POST['libraryhours'];
$tut4eski=$_POST['eskilibrary'];

$sql1="UPDATE kutuphane SET Kutuphane_Adi='$tut1',Kutuphane_Konumu='$tut2',Kutuphane_Calisma_Saatleri='$tut3' WHERE Kutuphane_Adi='$tut4eski' ";
// $sonuc1=mysqli_query($baglan,$sql1);

if ($baglan->query($sql1) === TRUE) {
    echo'<script>alert("Değişiklikler kaydedildi!");</script>
<meta http-equiv = "refresh" content = " 0.5 ; url=libraries.php"/>';
  } else {
    echo "Error updating record: " . $baglan->error;
  }


?>

<?php
}
?>