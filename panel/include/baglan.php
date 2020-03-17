<?php 
error_reporting(0);
session_start();
ob_start();

date_default_timezone_set('Etc/GMT-3');

try {
	$vt = New PDO("mysql:host=localhost;dbname=teknik_servis;charset=utf8", "root","" );
} catch (PDOException $hata) {
	echo "HATA :Veri Tabanına Bağlanılamadı Lütfen 05070401109 No'lu Telefonu Arayınız"."<br>".$hata -> getmessage() ;	
}



 ?>