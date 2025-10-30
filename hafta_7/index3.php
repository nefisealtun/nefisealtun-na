<?php
$baglan=mysql_connect("localhost","root","") or
die("Bağlantı hatası");
$sec=mysql_select_db("okul",$baglan);
$sorgu=mysql_query("SELECT * FROM
ogrenci",$baglan);
echo "Toplam ". mysql_num_rows($sorgu)." kayıt
bulunmuştur.";
mysql_close($baglan);
?>