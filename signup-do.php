<?php
include "config.php";
if (!(isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No']))) {
?>

<?php 
$tut=$_POST["citizenshipnumber"];
$sql2="SELECT Uye_TC_NO FROM uye WHERE Uye_TC_NO='$tut'";
$sonuc2=mysqli_query($baglan,$sql2);
$sonuc3=$sonuc2->fetch_assoc();

 if(isset($_POST["buton"])){
	

	if(isset($sonuc3)){

		echo "<script type='text/javascript'>alert('Bu TC No zaten kayıtlı!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=signup.php'/>";
	
	}
	else{
	 if(($_POST["citizenshipnumber"] && $_POST["name"] && $_POST["adres"]&& $_POST["surname"] && $_POST["email"] && $_POST["number"] && $_POST["password"] && $_POST["birthdate"])!=NULL){
	
	$sql1="INSERT INTO uye(Uye_TC_No,Uye_Adi,Uye_Soyadi,Uye_Mail,Uye_Adres,Uye_Tel_No,Uye_Sifre,Uye_DG)values('".$_POST["citizenshipnumber"]."','".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["adres"]."','".$_POST["number"]."','".$_POST["password"]."','".$_POST["birthdate"]."')";

	$sonuc1=mysqli_query($baglan,$sql1);
	?>

	<meta http-equiv = "refresh" content = " 0.5 ; url=index.php"/>
<?php	
}
	 else  {
	 echo "<script type='text/javascript'>alert('Lütfen bütün alanları doldurunuz!');</script>";}
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