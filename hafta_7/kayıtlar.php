<html>head><title>Kayıtlar</title></head>
<body>

<table border="1" cellpadding="5">

<tr style="background-color: #ddd;“><td>Ad Soyad</td>
<td>Bölüm</td><td>Düzenle</td>

</tr>

<?php
$baglan=mysql_connect("localhost","root","") or

die("Bağlantı Hatası");
$sec=mysql_select_db("okul",$baglan);
mysql_query("SET NAMES 'utf8'");
$bilgiler=mysql_query("SELECT * FROM ogrenci");
while($goster=mysql_fetch_array($bilgiler))
{
$id=$goster['numara'];

$adsoyad=$goster['adsoyad'];
$bolum=$goster['bolum'];
echo "<tr>";
echo "<td>$adsoyad</td>";
echo "<td>$bolum</td>";
echo "<td><a href='duzenle.php?id=$id'>

Düzenle</a></td>";
echo "</tr>";

}?>

</table></body></html>