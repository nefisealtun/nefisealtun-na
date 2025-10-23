<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include ve Require Örneği</title>
</head>
<body>

<?php
// varsayalim ki 'header.php' adında bir dosyamız var:
// <h1>Siteme Hoş Geldiniz</h1><hr>
// ve 'footer.php' adında bir dosyamız var:
// <hr><p>Tüm hakları saklıdır. 2025</p>

echo "<h2>PHP Dosya Dahil Etme</h2>";

// include: Dosya yoksa uyarı (Warning) verir ve script çalışmaya devam eder.
include "header.php"; // header.php'nin içeriğini buraya dahil et

echo "<p style='padding: 20px; border: 1px solid blue;'>Bu sayfanın ana içeriğidir.</p>";

// require: Dosya yoksa ölümcül hata (Fatal Error) verir ve script durur.
// Genellikle kritik dosyalar (veritabanı ayarları, ana şablonlar) için kullanılır.
require "footer.php"; // footer.php'nin içeriğini buraya dahil et
// Eğer dosya adını yanlış yazsaydık (örn: footer_yok.php)
// require hata verip scripti durdururdu.
?>

</body>
</html>