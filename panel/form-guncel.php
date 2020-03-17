<?php   
include_once("include/kontrol.php");
$guncelle_id= $_GET["guncelle_id"];

$bilgi = $vt -> prepare("select * from form where form_id=:form_id");
$bilgi -> execute(array("form_id"=>$guncelle_id) );

$bilgi_dizi = $bilgi ->  fetch(PDO::FETCH_ASSOC);

$ad_soyad = $bilgi_dizi["ad_soyad"];
$telefon  = $bilgi_dizi["telefon"];
$email    = $bilgi_dizi["email"];
$cihaz    = $bilgi_dizi["cihaz"];
$ariza    = $bilgi_dizi["ariza"];
$fiyat    = $bilgi_dizi["fiyat"];
$onay     = $bilgi_dizi["onay"];
$teslim   = $bilgi_dizi["teslim"];
$hazir    = $bilgi_dizi["hazir"];

if ($_POST["btn_form_guncelle"]) {
    $ad_soyad = $_POST["ad_soyad"];
    $telefon  = $_POST["telefon"];
    $email    = $_POST["email"];
    $cihaz    = $_POST["cihaz"];
    $ariza    = $_POST["ariza"];
    $onay     = intval($_POST["onay"]);
    $teslim   = intval($_POST["teslim"]);
    $hazir    = intval($_POST["hazir"]);
    $fiyat    = $_POST["fiyat"];

}





?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Teknik Servis</title>
  <link rel="stylesheet" href="bootstrap/css/all.css"  crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="author" content="teknik servis">
    <meta name="copyright" content="teknik servis">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
      <link rel="stylesheet" href="cs/form.css">

</head>
<body>

<div class="container">  
     <form id="contact"  action="" method="post">
          <table cellpadding="5" cellspacing="5" width="400" align="center">
                <tr>
                    <td>Ad - Soyad</td>
                    <td><input type="text" name="ad_soyad" required maxlength="120" value="<?php echo $ad_soyad; ?>" ></td>
                </tr>
                <tr>
                    <td>E-Posta</td>
                    <td><input name="email"  type="text"  rows="4" required value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td>Telefon</td>
                    <td><input type="number" name="telefon" value="<?php echo $telefon; ?>"></td>
                </tr>
                <tr>
                    <td>Cihaz</td>
                    <td><input type="text" name="cihaz" value="<?php echo $cihaz;?>"></td>
                </tr>
                <tr>
                    <td>Arıza</td>
                    <td><input type="text" name="ariza" value="<?php echo $ariza; ?>"></td>
                </tr>
                <tr>
                    <td>Fiyat</td>
                    <td><input type="text" value="<?php echo $fiyat; ?>" name="fiyat" ></td>
                </tr>
                <tr>
                     <td>Onay</td>
                     <td><input type="checkbox" name="onay" value="1" <?php if ($onay==1) {
                         echo "checked=''";}  ?>></td>
                 </tr>
                 <tr>
                     <td>Hazır</td>
                     <td><input type="checkbox" name="hazir" value="1" <?php if ($hazir==1) {
                         echo "checked=''";}  ?>></td>
                 </tr>
                 <tr>
                     <td>Teslim</td>
                     <td><input type="checkbox" name="teslim" value="1" <?php if ($teslim==1) {
                         echo "checked=''";}  ?>></td>
                 </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_form_guncelle" value="Kategori Gönder"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                       <?php 
                        if ($_POST["btn_form_guncelle"]) {
                            $form_guncel = $vt -> prepare("update form set ad_soyad=:ad_soyad, telefon=:telefon, email=:email, cihaz=:cihaz, ariza=:ariza, fiyat=:fiyat, onay=:onay, teslim=:teslim, hazir=:hazir where form_id=:form_id");
                            $form_guncel -> execute(array("ad_soyad"=>$ad_soyad, "telefon"=>$telefon, "email"=>$email, "cihaz"=>$cihaz, "ariza"=>$ariza, "fiyat"=>$fiyat, "onay"=>$onay, "teslim"=>$teslim, "hazir"=>$hazir, "form_id"=>$guncelle_id) );
                            $hata= $form_guncel -> errorinfo();
                            
                            if ($hata[2]=="") {
                                echo "Güncelledi - Panele Yönlendiriliyorsunuz.";
                                header("refresh:3;url=search.php");
                            }else {
                                echo "Hata".$hata[2];
                            }
                        }


                        ?>

                         

                    </td>
                </tr>
            </table>  
        </form>
   </div>


</body>

</html>