<?php
include('ajax.php');



$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'ex');




$setSql = "SELECT ur_Id,ur_username,ur_password FROM `tbl_user`";
//$setRec = mysqli_query($tr,$setSql,"set SESSION character_set_client = utf8");

$stmt=$db_con->prepare('select * from form');
$stmt->execute();


$columnHeader ='';
$columnHeader = "Id"."\t"."Adi-Soyadı"."\t"."Telefon"."\t"."E-mail"."\t"."Cihaz"."\t"."Fiyat"."\t"."Ariza"."\t"."Onay"."\t"."Teslim"."\t";


$setData='';

while($rec =$stmt->FETCH(PDO::FETCH_ASSOC))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}
header('Content-Encoding: UTF-8');
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=excel.xls");
header("Pragma: no-cache");
header("Expires: 0");
print chr(255) . chr(254) . mb_convert_encoding($setData, 'UTF-16LE', 'UTF-8');
//echo ucwords($columnHeader)."\n".$setData."\n";

?>