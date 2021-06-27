<?php
include "config.php";
if (isset($_SESSION['Calisan_TC_No']) || isset($_SESSION['Uye_TC_No'])) {
?>

<?php

session_destroy();

echo'<meta http-equiv="refresh" content=" 0.5; index.php">';

?>

<?php
}
else {
    echo "<script type='text/javascript'>alert('Bu sayfaya erişim izniniz yok!')</script>
		<meta http-equiv = 'refresh' content = ' 0.5 ; url=index.php'/>";
}
?>