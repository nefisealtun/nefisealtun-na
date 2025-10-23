<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form İşleme Örneği</title>
</head>
<body>

<h1>Kullanıcı Girişi</h1>

<?php
// Bu bölüm, sayfa POST metodu ile gönderildiğinde çalışır
$mesaj = ""; // Kullanıcıya gösterilecek mesaj için boş bir değişken

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form gönderilmiş demektir.
    
    // Güvenlik: htmlspecialchars() kullanıcıdan gelen özel karakterleri HTML'e dönüştürür.
    // Bu, XSS (Cross-Site Scripting) saldırılarını önlemeye yardımcı olur.
    // $_POST["kullanici_adi"] formdaki input alanının 'name' özelliğinden gelir.
    $ad = htmlspecialchars($_POST["kullanici_adi"] ?? ''); // PHP 7.0+ ile $_POST boşsa boş string atar

    if (empty($ad)) {
        $mesaj = "<p style='color: red;'>Lütfen adınızı giriniz.</p>";
    } else {
        $mesaj = "<p style='color: green;'>Hoş geldin, $ad!</p>";
    }
}
?>

<form method="POST" action="">
    <label for="kullanici_adi">Adınız:</label>
    <input type="text" id="kullanici_adi" name="kullanici_adi" required>
    <button type="submit">Gönder</button>
</form>

<hr>

<?php
// PHP'de ekrana yazdırma kısa yolu: '<?= ... ?>'
echo $mesaj; 
?>

</body>
</html>