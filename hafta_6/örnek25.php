<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tarih ve Zaman Fonksiyonları</title>
</head>
<body>

<h1>PHP Tarih ve Zaman İşlemleri</h1>

<?php
echo "<h3>1. date() Fonksiyonu ile Formatlama</h3>";
// 'date()' fonksiyonu: Zamanı formatlamak için kullanılır
echo "<p>Güncel Tarih ve Saat: <b>" . date("d-m-Y H:i:s") . "</b></p>"; 
echo "<p>Sadece Yıl: <b>" . date("Y") . "</b></p>";
echo "<p>Günün Adı (İngilizce): <b>" . date("l") . "</b></p>"; // Thursday

echo "<hr>";

echo "<h3>2. strtotime() Fonksiyonu ile Hesaplama</h3>";
// 'strtotime()' fonksiyonu: Metin halindeki tarihi zaman damgasına (timestamp) çevirir
$zaman_damgasi = strtotime("10 January 2026");
echo "10 Ocak 2026'nın zaman damgası: <b>$zaman_damgasi</b> <br>";

echo "<hr>";

// 'strtotime' ile tarih hesaplamaları
$yarin = strtotime("+1 day");
$haftaya = strtotime("+1 week");
$gecen_ay = strtotime("-1 month");

echo "Yarının tarihi: <b>" . date("d-m-Y", $yarin) . "</b><br>";
echo "Haftaya bugün: <b>" . date("d-m-Y", $haftaya) . "</b><br>";
echo "Geçen ay bugün: <b>" . date("d-m-Y", $gecen_ay) . "</b><br>";
?>

</body>
</html>