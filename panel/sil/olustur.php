<?
// Veritabanı Bağlantısı
$host="localhost";
$db="teknik_servis";
$user="root";
$pass="";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('utf8',$conn);
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
if(isset($_POST["excelolustur"])){ // FORM SONUC
$dosya = "olusturalacakdosya.xls"; // EXCEL TABLOSU ADI
$yaz = @fopen($dosya,'w+'); 
$tablo_adi = "form"; // Tablo Adi
$tablo_sorgu = mysql_query("select * from $tabloadi");

fwrite($yaz,"Adt Soyadt Bolumt Emailt Telefont n");
// Bu kod aşağıdaki şemayı çıkarmaktadır.
// A  | B  |   C   |  D  |   E   
// -----------------------------
// ID | Ad | Soyad | Yaş | Email
// -----------------------------

while ($tablo_sonuc = mysql_fetch_row($tablo_sorgu)) {
// Türkçe karakterini çözmek için;
// mb_convert_encoding($tablo_sonuc[sayi], "iso-8859-9", "UTF-8"); kullanılır.
$sutun0 = $tablo_sonuc[0]; // Id olduğu için karakter düzeltmedik. 
$sutun1 = mb_convert_encoding($tablo_sonuc[1], "iso-8859-9", "UTF-8");
$sutun2 = mb_convert_encoding($tablo_sonuc[2], "iso-8859-9", "UTF-8");
$sutun3 = $tablo_sonuc[3]; // Yaş olduğu için karakter düzeltmedik. 
$sutun4 = $tablo_sonuc[4]; // E-posta olduğu için karakter düzeltmedik. 

fwrite($yaz,"$sutun0t $sutun1t $sutun2t $sutun3t $sutun4tn"); 

//Gelen verileri satırlara yazdırdık.
}

mysql_free_result($tablo_sorgu); 
fclose($yaz);
echo "İşlem Tamamlandı"; 
exit;
}
?>
<FORM ACTION="?page=olustur" method="post">
<INPUT TYPE="submit" value="Verileri Aktar" name="excelolustur"> 
</FORM>