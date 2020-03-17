<?php   
include_once("include/kontrol.php");



 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Aramama</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <link rel="stylesheet" href="cs/dataTables.bootstrap.css">
    <link rel="stylesheet" href="cs/fontawesome-free-5.8.1-web/css/all.css">
    <style type="text/css">
        body { 
  font-size: 140%; 
}

h2 {
  text-align: center;
  padding: 20px 0;
}

table caption {
    padding: .5em 0;
}

table.dataTable th,
table.dataTable td {
  white-space: nowrap;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
#widgetPanel {display: none !important;}
    </style>


</head>
<body>
<?php 
  $onay_id  = $_GET["onay_id"];
  $onay     = $_GET["onay"];

  if ($onay_id>0) {
    $durum_guncel = $vt -> prepare("update form set onay=:onay where form_id=:form_id");
    $durum_guncel -> execute(array("onay"=>$onay, "form_id"=>$onay_id) );
  }

  $teslim_id = $_GET["teslim_id"];
  $teslim    = $_GET["teslim"];

    if ($teslim_id>0) {
      $teslim_guncel = $vt -> prepare("update form set teslim=:teslim where form_id=:form_id");
      $teslim_guncel -> execute(array("teslim"=>$teslim, "form_id"=>$teslim_id));
    }
  $hazir_id = $_GET["hazir_id"];
  $hazir    = $_GET["hazir"];
    if ($hazir_id>0) {
      $hazir_guncel = $vt -> prepare("update form set hazir=:hazir where form_id=:form_id");
      $hazir_guncel -> execute(array("hazir"=>$hazir, "form_id"=>$hazir_id));
    }
 ?>


    <h2>Teknik Servis Sorgulama</h2>
    <p style="margin: 0px;margin-top: -20px;"><a href="form.php" style="position: relative;left: 48%;">Ürün Ekle</a></p>


<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <form action="" method="post">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th><button name="SecilenSil" type="submit" onclick="return confirm('Silmek istediğinizden emin misiniz.')">TOPLU Sİ</button></th>
            <th>Ad-soyad</th>
            <th>Ürün</th>
            <th>Telefon</th>
            <th>Arıza</th>
            <th>Fiyat</th>
            <th>Güncelle</th>
            <th>Onay</th>
            <th>Hazır</th>
            <th>Teslim</th>
          </tr>
        </thead>

        <tbody>
              <?php
         
    
                $urun_liste = $vt -> prepare("select * from form order by form_id asc");
                $urun_liste -> execute();
                while ($urun_dizi=$urun_liste -> fetch(PDO::FETCH_ASSOC)) {
                  $form_id = $urun_dizi["form_id"];
                  $ad_soyad =  $urun_dizi["ad_soyad"];
                  $cihaz    = $urun_dizi["cihaz"];
                  $telefon  = $urun_dizi["telefon"];
                  $fiyat    = $urun_dizi["fiyat"];
                  $onay     = $urun_dizi["onay"];
                  $ariza    = $urun_dizi["ariza"];
                  $teslim   = $urun_dizi["teslim"];
                  $hazir    = $urun_dizi["hazir"];

             ?>


                      
          <tr>
            <td>
              <input type="checkbox" name="id[]" value="<?php echo $form_id; ?>">
            </td>
            <td><?php echo $ad_soyad; ?></td>
            <td><?php echo $cihaz; ?></td>
            <td><?php echo $telefon; ?></td>
            <td><?php echo $ariza; ?></td>
            <td><?php echo $fiyat." TL"; ?></td>
            <td align="center">
              <a href="form-guncel.php?guncelle_id=<?php echo$form_id; ?>" target="_blank"><i style="font-size: 20px;" class="fas fa-edit"></i>
              </a></td>
            <td align="center"> 
            <div id="menu-nav" >
             <?php if ($onay==1) { ?>
                  <div class="get_ornek">
                  <a class="plusOne"  id="someIDForYourSQLTable" href="?onay_id=<?php echo $form_id; ?>&onay=0">
                     <i  class='fas fa-check-circle' style='font-size:20px;color:green;'><p style="display:none;"><?php echo $onay;?></p></i>
                  </a>
                  </div>
              <?php } else { ?>
                   <div class="get_ornek">
                    <a class="plusOne"  id="someIDForYourSQLTable" href="?onay_id=<?php echo $form_id; ?>&onay=1">
                       <i style='font-size:20px;color:red;' class='fas fa-minus-circle'></i>
                    </a>
                   </div>
              <?php } ?>
            </div>
            </td>

             <td align="center">
              <?php if ($hazir==1) { ?>
                  <a data-ajax="true" href="?hazir_id=<?php echo $form_id; ?>&hazir=0">
                     <i class='fas fa-check-circle' style='font-size:20px;color:green;'><p style="display:none;"><?php echo $hazir;?></p></i>
                  </a>
              <?php } else { ?>
                   <a data-ajax="true" href="?hazir_id=<?php echo $form_id; ?>&hazir=1">
                       <i style='font-size:20px;color:red;' class='fas fa-minus-circle'></i>
                   </a>
              <?php } ?>
            </td>

            <td align="center">
              <?php if ($teslim==1) { ?>
                  <a data-ajax="true" href="?teslim_id=<?php echo $form_id; ?>&teslim=0">
                     <i class='fas fa-check-circle' style='font-size:20px;color:green;'><p style="display:none;"><?php echo $teslim;?></p></i>
                  </a>
              <?php } else { ?>
                   <a data-ajax="true" href="?teslim_id=<?php echo $form_id; ?>&teslim=1">
                       <i style='font-size:20px;color:red;' class='fas fa-minus-circle'></i>
                   </a>
              <?php } ?>
            </td>

          </tr>
                <?php

                 } 

                 $say = $vt -> query("select * from form where onay=0");
                 $sayi =  $say -> rowcount();
                 $say_teslim = $vt -> query("select * from form where hazir=1 and teslim=0");
                 $sayi_teslim =  $say_teslim -> rowcount();

                  if($_POST)
                    {
                      $id = $_POST["id"];
                      $in  = str_repeat('?,', count($id) - 1) . '?'; 
                      $sil = $vt -> prepare("DELETE FROM form WHERE form_id IN($in)"); 
                      $sil->execute($id); 
                      $hata = $sil->errorInfo();
                            if($hata[2])
                            {
                              echo "Silme işlemi başarısız";
                            }else
                            {
                              echo "Silme işlemi başarılı";
                              header("Location:search.php");
                            }

                    }
                ?>   

        </tbody>

        <tfoot>
          <tr>
            <td colspan="10" class="text-center"><p style="float: left;"><a style="text-decoration: none;" href="include/excel.php"><i class="fas fa-file-excel"></i> Excel Çıktı</a></p><?php echo $sayi; ?> Adet Ürün Beklemede. <p style="float: right;"><?php echo $sayi_teslim; ?> Adet Ürün Hazır.</p></td>
          </tr>
        </tfoot>
      </table>
    </form>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $('table').DataTable();
</script>
<script>

</script>

</html>