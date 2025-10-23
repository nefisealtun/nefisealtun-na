<?php
// session_start() her zaman sayfanın EN BAŞINDA olmalıdır!
// PHP kodunun çalışabilmesi için bu satır, <html> etiketinden önce olmalıdır.
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Oturum (Session) Yönetimi</title>
</head>
<body>

<h1>PHP Oturum (Session) Yönetimi Örneği</h1>

<?php
echo "<h3>1. Session Değişkeni Atama</h3>";
// 1. Session Değişkeni Atama (Örn: Kullanıcı giriş yaptı)
$_SESSION["kullanici_adi"] = "Ahmet123";
$_SESSION["giris_zamani"] = time();

echo "<p style='color: blue;'>Session atandı. Kullanıcı adı: <b>" . $_SESSION["kullanici_adi"] . "</b></p>";
echo "<p>Giriş Zamanı (Unix Timestamp): " . $_SESSION["giris_zamani"] . "</p>";

echo "<hr>";

echo "<h3>2. Session Kontrolü</h3>";
// 2. Session Kontrolü (Başka bir sayfada olduğunuzu varsayın)
if (isset($_SESSION["kullanici_adi"])) {
    echo "<p style='color: green;'>Tekrar hoş geldin, <b>" . $_SESSION["kullanici_adi"] . "</b>! (Session Var)</p>";
} else {
    echo "<p>Giriş yapmamışsınız. (Session Yok)</p>";
}

echo "<hr>";

echo "<h3>3. Session Silme (Unset)</h3>";
// 3. Session Silme (Çıkış yapma)
// session_unset(); // Tüm session değişkenlerini siler
// session_destroy(); // Oturumu tamamen sonlandırır ve session ID'sini siler
// Sadece tek bir değişkeni silmek için:
if (isset($_SESSION["giris_zamani"])) {
    unset($_SESSION["giris_zamani"]);
    echo "<p style='color: orange;'>Giriş zamanı session'dan silindi.</p>";
} else {
    echo "<p>Giriş zamanı session değişkeni zaten yoktu.</p>";
}

echo "<h3>4. Silinme Sonrası Kontrol</h3>";
echo "Kullanıcı Adı Session durumu: " . (isset($_SESSION["kullanici_adi"]) ? '<b>VAR</b>' : 'YOK') . "<br>";
echo "Giriş Zamanı Session durumu: " . (isset($_SESSION["giris_zamani"]) ? 'VAR' : '<b>YOK</b>') . "<br>";
?>

</body>
</html>