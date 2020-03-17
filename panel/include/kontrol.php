<?php 

	include_once("include/baglan.php");

	if ($_GET["admin_oturum"]=="kapat")
		$_SESSION["admin"]=""; {
	}
	
	if ($_SESSION["admin"]=="") {
		header("location:oturum-ac.php");
	}


 ?>


