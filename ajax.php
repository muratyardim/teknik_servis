<?php 
include("php-excel.class.php");

$data = array(
	1 =>"Veri", "Veriler",
	array("Çıktı", "oldu"),
	array("sanli", "oldu"),
	array("ali", "oldu")

);









$dosya_adi = "veriler";
$xls = new Excel_XML('UTF-8', false, 'Deneme');
$xls -> addArray($data);
$xls -> generateXML($dosya_adi);


 ?>