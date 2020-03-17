<?
include("baglan.php");//mysql baglantisinin yapildigi tablo
$gelen=$_POST['sil'];
foreach($gelen as $deger){
//echo $deger."<br>";
$vt -> query("delete from tablo where id='$deger'");
}
?>