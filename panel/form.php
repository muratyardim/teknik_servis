<?php   
include_once("include/kontrol.php");
$ad_soyad = $_POST["ad_soyad"];
$telefon  = $_POST["telefon"];
$email    = $_POST["email"];
$cihaz    = $_POST["cihaz"];
$ariza    = $_POST["ariza"];
$fiyat    = $_POST["fiyat"];
$onay     = intval($_POST["onay"]);
$teslim     = intval($_POST["teslim"]);
$hazir     = intval($_POST["hazir"]);
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
                    <td><input type="text" name="ad_soyad" required maxlength="120" value=""></td>
                </tr>
                <tr>
                    <td>E-Posta</td>
                    <td><input name="email"  type="text"  rows="4" required></td>
                </tr>
                <tr>
                    <td>Telefon</td>
                    <td><input type="number" name="telefon"></td>
                </tr>
                <tr>
                    <td>Cihaz</td>
                    <td><input type="text" name="cihaz" ></td>
                </tr>
                <tr>
                    <td>Arıza</td>
                    <td><input type="text" name="ariza"></td>
                </tr>
                <tr style="display: none;">
                    <td>Fiyat</td>
                    <td><input type="text" value="Belirlenmedi" name="fiyat"></td>
                </tr>
                <tr style="display: none;">
                     <td>Onay</td>
                     <td><input type="checkbox" name="onay" value="0" <?php if ($onay==1) {
                         echo "checked=''";}  ?>></td>
           
                </tr>
                <tr style="display: none;">
                     <td>Hazır</td>
                     <td><input type="checkbox" name="hazir" value="0" <?php if ($hazir==1) {
                         echo "checked=''";}  ?>></td>
           
                </tr>
                 <tr style="display: none;">
                     <td>Teslim</td>
                     <td><input type="checkbox" name="teslim" value="0" <?php if ($teslim==1) {
                         echo "checked=''";}  ?>></td>
                 </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_form_ekle" value="Kategori Gönder"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
        
                        if ($_POST["btn_form_ekle"]) {
                            //Kategori ekle basladı
                                     
                                $uye_ekle = $vt -> prepare("insert into form set ad_soyad=:ad_soyad, telefon=:telefon, email=:email, cihaz=:cihaz, ariza=:ariza ,fiyat=:fiyat, onay=:onay, hazir=:hazir, teslim=:teslim");
                                $uye_ekle ->  execute(array("ad_soyad"=>$ad_soyad, "telefon"=>$telefon, "email"=>$email, "ariza"=>$ariza, "cihaz"=>$cihaz, "fiyat"=>$fiyat, "onay"=>$onay, "hazir"=>$hazir, "teslim"=>$teslim) );
                                $hata= $uye_ekle -> errorinfo();

                                if ($hata[2]) {
                                    echo "Başarısız".$hata[2];
                                    
                                
                                }else {
                                    echo "Kayıt Oldu";
                                    header("refresh:3;url=index.php");
                                }
                            //Kategori ekle bitti

                            }

                            

                         ?>

                    </td>
                </tr>
            </table>  
        </form>
   </div>


</body>

</html>