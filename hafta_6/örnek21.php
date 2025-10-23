<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dosya İşlemleri Örneği</title>
</head>
<body>

<h1>PHP Dosya İşlemleri (Okuma/Yazma)</h1>

<?php
$dosya_adi = "gunluk.txt";
$icerik = "Bugün " . date("d.m.Y H:i:s") . " tarihinde log kaydı tutuldu.\n";

echo "<h3>1. Dosyaya Yazma (Üzerine Yazma)</h3>";
// 1. Dosyaya Yazma (veya Oluşturma)
// file_put_contents: Dosya yoksa oluşturur, varsa üzerine yazar.
file_put_contents($dosya_adi, $icerik);
echo "<p>İlk kayıt dosyaya yazıldı. Eski içerik silinmiş olmalı.</p>";

echo "<h3>2. Dosyaya Ekleme (Append)</h3>";
// 2. Dosyaya Ekleme (Append)
// Varolan içeriğin sonuna eklemek için FILE_APPEND bayrağı kullanılır.
$yeni_icerik = "İkinci log kaydı eklendi.\n";
file_put_contents($dosya_adi, $yeni_icerik, FILE_APPEND);
echo "<p>İkinci kayıt başarıyla eklendi.</p>";

// 3. Dosyadan Okuma
if (file_exists($dosya_adi)) { // Dosya var mı?
    $okunan_veri = file_get_contents($dosya_adi);

    echo "<h3>3. Günlük Dosyası İçeriği</h3>";
    echo "<div style='border: 1px dashed #ccc; padding: 10px; background-color: #f9f9f9;'>";
    // nl2br() fonksiyonu: Satır sonlarını (\n) HTML <br> etiketine çevirir.
    echo nl2br($okunan_veri);
    echo "</div>";
} else {
    echo "<p style='color: red;'>Dosya bulunamadı.</p>";
}
?>

<hr>
<p><em>Not: Bu örnek, dosya izinlerinizin (permission) PHP'nin dosya yazmasına izin verdiğini varsayar.</em></p>

</body>
</html>