<?php
if($_POST){

$adsoyad=$_POST['adsoyad'];
$bolum=$_POST['bolum'];
$baglan=mysql_connect("localhost","root","") or

die("Bağlantı hatası");

$sec=mysql_select_db("okul",$baglan);
mysql_query("SET NAMES 'utf8'");
$ekle=mysql_query("INSERT INTO

ogrenci(adsoyad,bolum) VALUES ('".$adsoyad."','".$bolum."')");

if($ekle) {

echo "Kayıt Eklenmiştir.";

}
else{

echo "Kayıt Başarısız.";

}
echo "<br><br><b><u>Eklenen

Bilgiler</u></b><br>";

echo "Ad Soyad : $adsoyad <br>";
echo "Bölüm : $bolum <br>";
echo "<br><a href='index.html' >Geri Dön</a>";

}?>