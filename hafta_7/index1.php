<?php
$baglan=mysql_connect("localhost","root","") or
die("Bağlantı hatası");
if(isset($baglan)){

echo "Sunucu ile bağlantı kuruldu.";

}
mysql_close($baglan);
?>