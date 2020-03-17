<?php 

include_once("include/baglan.php");



if($_SESSION["admin"] != "") {
   header("location:index.php");
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
    <link rel="stylesheet" type="text/css" href="cs/oturum.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

</head>
<?php 
$admin = $_POST["admin"];
$sifre = $_POST["sifre"];

if ($admin and $sifre) {
  $kontrol = $vt -> prepare ("select * from adminler where email=:admin and sifre=:sifre");
  $kontrol -> execute(array("admin"=>$admin, "sifre"=>$sifre) );

  $say = $kontrol -> rowcount();
  if ($say==1) {
    $dizi = $kontrol -> fetch(PDO::FETCH_ASSOC);
    $_SESSION["admin"]=$dizi;
    echo "Oturum Açıldı";
    header("refresh:3;url=index.php");
  }else {
     $_SESSION["hatali_giris"] = $_SESSION["hatali_giris"] + 1;
      if ($_SESSION["hatali_giris"] == 5 )  {
        setcookie("oturum_engelle","engelle",time()+20*60);
      }

      echo "HATA : Tekrar Deneyin".$_SESSION["hatali_giris"];
      header("refresh:3");

  }
}else {


 ?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Teknik Panel</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="admin" required autofocus>
                <label for="inputEmail">Email Adresi</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="sifre" required>
                <label for="inputPassword">Şifre</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Kayıtlı Kalsın</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Giriş Yap</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
    }
   ?>
</body>

</html>