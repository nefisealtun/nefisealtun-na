<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO Güncelleme (UPDATE) Örneği</title>
</head>
<body>

<h1>PHP PDO Veri Güncelleme (UPDATE)</h1>

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

    // Güncellenecek yeni veriler
    $yeni_email = "ali.yeni@veli.com";
    $guncellenecek_id = 1; // ID'si 1 olan kullanıcının email'ini güncelle

    echo "<h3>Güncelleme İşlemi Başlatılıyor...</h3>";

    // 2. Güncelleme (UPDATE) Sorgusu
    // Hazırlıklı İfade (Prepared Statement) kullanılıyor
    $stmt = $db->prepare("UPDATE kullanicilar SET email = :email WHERE id = :id");

    // Değerleri bağlama
    $stmt->bindParam(':email', $yeni_email);
    $stmt->bindParam(':id', $guncellenecek_id);

    // Sorguyu çalıştırma
    $stmt->execute();
    
    // İşlem başarılı
    echo "<p style='color: blue;'>ID: <b>$guncellenecek_id</b> olan kullanıcının e-postası başarıyla güncellendi.</p>";

    // Kontrol için veriyi tekrar çekme
    echo "<h3>Güncelleme Sonrası Kontrol (ID: $guncellenecek_id)</h3>";
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE id = :id");
    $sorgu->bindParam(':id', $guncellenecek_id);
    $sorgu->execute();
    $satir = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($satir) {
        echo "Yeni Bilgi: ID: " . $satir['id'] . " - Ad: " . $satir['ad'] . " - Email: <strong>" . $satir['email'] . "</strong><br>";
    } else {
        echo "Kullanıcı bulunamadı.";
    }

} catch (PDOException $e) {
    // Hata oluşursa burası çalışır
    echo "<p style='color: red;'>HATA: Güncelleme Hatası veya Bağlantı Hatası oluştu.</p>";
    echo "Detay: " . $e->getMessage();
}

// Bağlantıyı Kapat
$db = null;
?>

</body>
</html>