<?php
$id=$_GET['id'];
$baglan=mysql_connect("localhost","root","") or
die("Bağlantı Hatası");

$sec=mysql_select_db("okul",$baglan)
; mysql_query("SET NAMES 'utf8'");
$sil=mysql_query("DELETE FROM

ogrenci WHERE numara='".$id."'");

if($sil){

echo "Silme İşlemi Başarılı";
header ("refresh: 1;

url=kayitlar.php");
}
else{

echo "Silme İşlemi

Başarısız.";
}

?>