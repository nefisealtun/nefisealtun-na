<?php
if($_POST){

$adsoyad=$_POST['adsoyad'];
$bolum=$_POST['bolum'];
$id=$_POST['id'];
$baglan=mysql_connect("localhost","root","") or die("Bağlantı Hatası");
$sec=mysql_select_db("okul",$baglan);
mysql_query("SET NAMES 'utf8'");
$guncelle=mysql_query("UPDATE ogrenci SET

adsoyad='".$adsoyad."',bolum='".$bolum."' WHERE numara='".$id."'");

if($guncelle) {

echo "Güncelleme İşlemi Başarılı.";
header ("refresh: 2; url=kayitlar.php");
}
else{

echo "Güncelleme Başarısız.";

}}

?>