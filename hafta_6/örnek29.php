<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO Silme (DELETE) Örneği</title>
</head>
<body>

<h1>PHP PDO Veri Silme (DELETE)</h1>

<?php
// Bağlantı Parametreleri
$sunucu = "localhost"; 
$vt_adi = "test_db"; 
$kullanici = "root"; 
$sifre = ""; 

$db = null;

try {
    // 1. Veritabanına Bağlanma
    $db = new PDO("mysql:host=$sunucu;dbname=$vt_adi;charset=utf8", $kullanici, $sifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color: green;'>Veritabanı bağlantısı başarılı.</p>";

    $silinecek_id = 2; // ID'si 2 olan kullanıcıyı sil

    echo "<h3>Silme İşlemi Başlatılıyor (ID: $silinecek_id)...</h3>";

    // 2. Silme (DELETE) Sorgusu
    // Hazırlıklı İfade (Prepared Statement) kullanılıyor
    $stmt = $db->prepare("DELETE FROM kullanicilar WHERE id = :id");

    // Değeri doğrudan execute() içinde gönderme
    $stmt->execute([':id' => $silinecek_id]);

    // rowCount(): Son işlemden etkilenen satır sayısını döndürür.
    $etkilenen_satir_sayisi = $stmt->rowCount();

    if ($etkilenen_satir_sayisi > 0) {
        echo "<p style='color: blue;'>ID: <b>$silinecek_id</b> olan kullanıcı başarıyla silindi. (Etkilenen satır: $etkilenen_satir_sayisi)</p>";
    } else {
        echo "<p style='color: orange;'>Silinecek kullanıcı bulunamadı (ID: $silinecek_id). Zaten silinmiş olabilir.</p>";
    }

} catch (PDOException $e) {
    // Hata oluşursa burası çalışır
    echo "<p style='color: red;'>HATA: Silme Hatası veya Bağlantı Hatası oluştu.</p>";
    echo "Detay: " . $e->getMessage();
}

// Bağlantıyı Kapat
$db = null;
?>

</body>
</html>