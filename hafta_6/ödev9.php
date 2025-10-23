<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO Veritabanı İşlemleri</title>
</head>
<body>

<h1>PHP PDO (MySQL) Veritabanı Örneği</h1>

<?php
$sunucu = "localhost"; // veya 127.0.0.1
$vt_adi = "test_db"; // Oluşturduğunuz veritabanının adı
$kullanici = "root"; // XAMPP varsayılan kullanıcı adı
$sifre = ""; // XAMPP varsayılan şifresi (boş)

// $db değişkenini try bloğunun dışında tanımlayalım, catch bloğunda kullanabilmek için.
$db = null;

try {
    // 1. Veritabanına Bağlanma (PDO Nesnesi)
    $db = new PDO("mysql:host=$sunucu;dbname=$vt_adi;charset=utf8", $kullanici, $sifre);

    // Hata modunu ayarla (Exception'ları yakalamak için)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color: green; font-weight: bold;'>Veritabanı bağlantısı başarılı!</p><hr>";

    // 2. Veri Ekleme (Hazırlıklı İfadeler - Prepared Statements)
    // NOT: Bu kısmı test etmek için yorum satırından çıkarmanız gerekir.
    /*
    $stmt = $db->prepare("INSERT INTO kullanicilar (ad, email) VALUES (:ad, :email)");
    // Parametreleri bağla
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':email', $email);

    // İlk kullanıcıyı ekle
    $ad = "Ali Veli";
    $email = "ali@veli.com";
    $stmt->execute();
    echo "<p>Ali Veli başarıyla eklendi.</p>";

    // İkinci kullanıcıyı ekle
    $ad = "Ayşe Fatma";
    $email = "ayse@fatma.com";
    $stmt->execute();
    echo "<p>Ayşe Fatma başarıyla eklendi.</p>";
    */
    
    // 3. Veri Çekme (SELECT)
    echo "<h3>Kullanıcı Listesi</h3>";
    $sorgu = $db->query("SELECT * FROM kullanicilar ORDER BY id DESC"); // En yeni ekleneni başa getir

    // fetch metodu ile verileri tek tek al
    // FETCH_ASSOC: Sütun adlarıyla ilişkisel dizi döndürür
    $sayac = 0;
    while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: <strong>" . $satir['id'] . "</strong> - Ad: " . $satir['ad'] . " - Email: " . $satir['email'] . "<br>";
        $sayac++;
    }
    
    if ($sayac == 0) {
        echo "<p>Veritabanında kayıtlı kullanıcı bulunmamaktadır.</p>";
    }

} catch (PDOException $e) {
    // Bağlantı veya sorgu hatası olursa burası çalışır
    echo "<p style='color: red; font-weight: bold;'>HATA: Veritabanı hatası oluştu.</p>";
    echo "Detay: " . $e->getMessage();
}

// 4. Bağlantıyı Kapat
$db = null;
echo "<hr><p>Veritabanı bağlantısı kapatıldı.</p>";
?>

</body>
</html>