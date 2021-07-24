<?php
error_reporting(0);
	if ($_GET['view']=='view'	OR	$_GET['view']==''){
		include "view_home.php";
	}elseif($_GET['view']=='pendaftaran'){
		include "pendaftaran.php";
	}elseif($_GET['view']=='pengunjung'){
		include "pengunjung.php";
	}elseif($_GET['view']=='profil'){
		include "profil.php";
	}elseif($_GET['view']=='bayar'){
		include "bayar.php";
	}
?>