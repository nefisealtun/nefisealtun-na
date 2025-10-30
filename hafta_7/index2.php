<?php
$baglan=mysql_connect("localhost","root","") or
die("Bağlantı hatası");
$sec=mysql_select_db("okul",$baglan);
if(isset($sec)){

echo "Veritabanı Seçilmiştir.";

}
mysql_close($baglan); ?>