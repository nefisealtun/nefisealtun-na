<?php
$baglan=mysql_connect("localhost","root","") or
die("Bağlantı Hatası");

$sec=mysql_select_db("okul",$baglan)

;

mysql_query("SET NAMES 'utf8'");

?>