<?php
include "config.php";
if (!(isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No']))) {
?>

<?php  

 $flag1=0;

 $flag2=0;
 if(!$baglan)
 {
	 die("bağlanamadı");
 }
 
 $tcno= $_POST['citizenshipnumber'];
 
 $bul_uye_full="SELECT * FROM uye WHERE Uye_TC_No='$tcno'";
 
 $bul_uye = "SELECT * FROM uye";

 $bul_calisan= "SELECT * FROM calisan";

 $bul_calisan_full = "SELECT * FROM calisan WHERE Calisan_TC_No='$tcno'";

 $calisan = $baglan->query($bul_calisan);

 $kayit = $baglan->query($bul_uye);
 
 $adi = $baglan->query($bul_uye_full);
 
 $adi2= $adi->fetch_assoc();
 
 if ($calisan->num_rows>0) {
	 while ($calisan2 =$calisan->fetch_assoc()) {
		if ($_POST['citizenshipnumber']==$calisan2["Calisan_TC_No"] && $_POST['password']==$calisan2["Calisan_Sifre"]) {
			echo "ÇALIŞAN GİRİŞİ YAPILDI ,AKTARILIYOR...";

			$_SESSION['Calisan_Adi']=$calisan2["Calisan_Adi"];;
			$_SESSION['Calisan_Soyadi']=$calisan2["Calisan_Soyadi"];
			$_SESSION['Calisan_Sifre']=$calisan2["Calisan_Sifre"];;
			$_SESSION['Calisan_No']= $calisan2["Calisan_No"];
			$_SESSION['Calisan_TC_No']=$calisan2["Calisan_TC_No"];
			$_SESSION['Calisan_Adres']=$calisan2["Calisan_Adres"];
			$_SESSION['Calisan_Mail']=$calisan2["Calisan_Mail"];
			$_SESSION['Calisan_Tel_No']=$calisan2["Calisan_Tel_No"];

			
			echo'<meta http-equiv="refresh" content=" 0.5; index.php">';
			$flag1=1;

		}
	 }
 }
 
 if($kayit->num_rows>0){
	 while($satir = $kayit->fetch_assoc()){

		
		if($_POST['citizenshipnumber']==$satir["Uye_TC_No"] && $_POST['password']==$satir["Uye_Sifre"]){
			echo "ÜYE GİRİŞİ YAPILDI ,AKTARILIYOR...";
			$flag1=1;
			$_SESSION['Uye_Adi']=$adi2["Uye_Adi"];;
			$_SESSION['Uye_Soyadi']=$adi2["Uye_Soyadi"];
			$_SESSION['Uye_Sifre']=$adi2["Uye_Sifre"];;
			$_SESSION['Uye_No']= $adi2["Uye_No"];
			$_SESSION['Uye_TC_No']=$adi2["Uye_TC_No"];
			$_SESSION['Uye_Adres']=$adi2["Uye_Adres"];
			$_SESSION['Uye_Mail']=$adi2["Uye_Mail"];
			$_SESSION['Uye_Tel_No']=$adi2["Uye_Tel_No"];
			echo'<meta http-equiv="refresh" content=" 0.5; index.php">';
		
			
			}
		}
		if($flag1!=1){
			echo'<script>alert("Şifre ve/veya TC Numaranız yanlış!");</script>
			<meta http-equiv="refresh" content=" 0.5; login.php">';

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