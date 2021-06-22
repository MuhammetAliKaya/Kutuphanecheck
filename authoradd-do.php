<?php

include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {
  
?>

<?php
$flag1=1;
$flag2=1;
$sql2="SELECT * FROM yazar";
$yazarr=mysqli_query($baglan,$sql2);

while($yazarcheck=$yazarr->fetch_assoc()){
    if($_POST["authorname"]==$yazarcheck['Yazar_Adi']&&$_POST["authorsurname"]==$yazarcheck['Yazar_Soyadi']){
        $flag2=0;
    }


}



if( ($_POST["authorname"]==NULL)||($_POST["authorsurname"]==NULL)||($_POST["authormilliyet"]==NULL)||($_POST["authorbirthdate"]==NULL)){

$flag1=0;
echo'<script>alert("Boş alanlar var!");</script>
<meta http-equiv = "refresh" content = " 0.5 ; url=authoradd.php"/>';

}
else{
if(!($flag2)){
    echo'<script>alert("Bu yazar zaten kayıtlı!");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=authoradd.php"/>';
}
else{
if($flag1){
    $sql1="INSERT INTO yazar(Yazar_Adi,Yazar_Soyadi,Yazar_Milliyeti,Yazar_DT)values('".$_POST["authorname"]."','".$_POST["authorsurname"]."','".$_POST["authormilliyet"]."','".$_POST["authorbirthdate"]."')";
    $sonuc1=$baglan->query($sql1);
    echo'<script>alert("Yazar eklendi");</script>
    <meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>';
}
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
