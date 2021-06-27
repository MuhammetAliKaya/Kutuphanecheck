<?php
error_reporting(0);
include "config.php";
if (isset($_SESSION['Calisan_TC_No'])) {
?>

<?php 
  $flag1=1;
  $flag2=1;
  $flag3=1;
  $flag4=1;
  $flag5=1;


if( ($_POST["bookname"]==NULL)||($_POST["bookisbn"]==NULL)||($_POST["bookpage"]==NULL)||($_POST["bookamount"]==NULL)||($_POST["bookdate"]==NULL)||($_POST["bookplace"]==NULL)||($_POST["bookauthorname"]==NULL) ||($_POST["bookauthorsurname"]==NULL) ){
    echo "alannlar boş";
    $flag1=0;

}
 if(isset($_POST["bookadd"])){
	
    // // $_POST["bookisbn"] && $_POST["bookname"] && $_POST["bookpage"] && $_POST["bookdate"] && $_POST["bookplace"] && $_POST["bookauthorname"] && $_POST["bookauthorsurname"]) && $_POST["tur"]!=NULL
    // // ,'".$_POST["bookauthorname"]."','".$_POST["bookauthorsurname"]."','".$_POST["tur"]."'
	//  if($_POST["bookisbn"] && $_POST["bookname"] && $_POST["bookpage"] && $_POST["bookdate"] && $_POST["bookplace"] && $_POST["bookauthorname"] && $_POST["bookauthorsurname"] && $_POST["tur"]!=NULL){
	
	// $sql1="INSERT INTO kitap(ISBN_No,Kitap_Adi,Kitap_Sayfa_Sayisi,Kitap__Basim_Tarihi,Kitap_Basim_Yeri)values('".$_POST["bookisbn"]."','".$_POST["bookname"]."','".$_POST["bookpage"]."','".$_POST["bookdate"]."','".$_POST["bookplace"]."')";
    // $sql2="INSERT INTO kitap_tur(Kitap_ISBN,Tur_No)values('".$_POST["bookisbn"]."','".$_POST["tur"]."')";
	// $sonuc1=mysqli_query($baglan,$sql1);
	// $sonuc2=mysqli_query($baglan,$sql2);


    $sql="SELECT * FROM yazar";
    $yazarbul=$baglan->query($sql);
    $sql4="SELECT * FROM kitap";
    $kitapsayaç=$baglan->query($sql4);
    $kitapsayaç1=$kitapsayaç->num_rows;
    $tut3=$_POST["bookisbn"];
    $sql8="SELECT * FROM kitap WHERE ISBN_No='$tut3'";
    $same=$baglan->query($sql8);
    $sametest=$same->fetch_assoc();
    
    
if($flag1){
    if(isset($sametest['ISBN_No'])){
        $flag5=0;
		echo "<script type='text/javascript'>alert('Bu ISBN No zaten kayıtlı!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=bookadd.php'/>";
	
	}
    else{
    while ($yazarbul1 =$yazarbul->fetch_assoc()) {
        // && $_POST["bookname"] && $_POST["bookpage"] && $_POST["bookdate"] && $_POST["bookplace"] && $_POST["bookauthorname"] && $_POST["bookauthorsurname"] && $_POST["tur"] 
		if ($_POST['bookauthorname']==$yazarbul1["Yazar_Adi"] && $_POST['bookauthorsurname']==$yazarbul1["Yazar_Soyadi"]) {
            $flag4=0;
          $cek1=$_POST['kutuphane'];
            if(1){
                $tut=$kitapsayaç1+1;
                // $sql5="INSERT INTO kitap(Kitap_Sira)values($tut)";
                if ($_POST['bookphoto']==Null) {
                    $sql1="INSERT INTO kitap(ISBN_No,Kitap_Adi,Kitap_Sayfa_Sayisi,Kitap_Adedi,Kitap__Basim_Tarihi,Kitap_Basim_Yeri,Kitap_Sira)values('".$_POST["bookisbn"]."','".$_POST["bookname"]."','".$_POST["bookpage"]."','".$_POST["bookamount"]."','".$_POST["bookdate"]."','".$_POST["bookplace"]."',$tut)";
                }
                else {
                    $sql1="INSERT INTO kitap(ISBN_No,Kitap_Adi,Kitap_Sayfa_Sayisi,Kitap_Adedi,Kitap_Kapak,Kitap__Basim_Tarihi,Kitap_Basim_Yeri,Kitap_Sira)values('".$_POST["bookisbn"]."','".$_POST["bookname"]."','".$_POST["bookpage"]."','".$_POST["bookamount"]."','".$_POST["bookphoto"]."','".$_POST["bookdate"]."','".$_POST["bookplace"]."',$tut)";
                }

                $sql2="INSERT INTO kitap_tur(Kitap_ISBN,Tur_No)values('".$_POST["bookisbn"]."','".$_POST["tur"]."')";
                $sql3="INSERT INTO yazar_kitap(Yazar_No,Kitap_ISBN)values('".$yazarbul1["Yazar_No"]."','".$_POST["bookisbn"]."')";
                
                $sql6="SELECT * FROM kutuphane WHERE Kutuphane_Adi=$cek1";
                $kutuphane=$baglan->query($sql6);
                $kutuphanebul1=$kutuphane->fetch_assoc();
                $sql5="INSERT INTO kitap_kutuphane(Kutuphane_No,Kitap_ISBN)values('".$_POST["kutuphane"]."','".$_POST["bookisbn"]."')";
                $sonuc1=mysqli_query($baglan,$sql1);
                $sonuc2=mysqli_query($baglan,$sql2);
                $sonuc3=mysqli_query($baglan,$sql3);
                // $sonuc4=mysqli_query($baglan,$sql5);

                if ($baglan->query($sql5) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $baglan->error;
                  }
                  
                
               


            }
        
        }
        
        
	 }
    }
    }
    else{
        echo'<script>alert("Alanlar boş olmamalı");</script>
        <meta http-equiv = "refresh" content = " 0.5 ; url=bookadd.php"/>';
        $flag2=0;

    }
    if($flag4&&$flag1&&$flag5) {
        $flag3=0;
        echo'<script>alert("Yazar kayıtlı değil");</script>
        
        <meta http-equiv = "refresh" content = " 0.5 ; url=authoradd.php"/>';

       
    }
    ?>
    <?php
        if($flag2&&$flag3&&$flag5){
            ?>
	 <meta http-equiv = "refresh" content = " 0.5 ; url=books.php"/>
    
<?php	
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