<?php
$baglan=mysql_connect("localhost","root","")
or die("Bağlantı hatası");
$sql="CREATE DATABASE sinif DEFAULT
CHARACTER SET utf8";
$sorgu=mysql_query($sql,$baglan);
if(isset($sorgu)){

echo "Veritabanı Oluşturuldu.";

}
else {

echo "Veritabanı Oluşturma Hata.";

}
mysql_close($baglan);
?>