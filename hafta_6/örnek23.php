<?php
// setcookie() fonksiyonu HTML'den önce çağrılmalıdır.

// 1. Cookie Atama
// setcookie("isim", "değer", "geçerlilik_süresi");
// time() + (60 * 60 * 24) -> Şu anki zamandan 1 gün sonrasına kadar geçerli
$gecerlilik_suresi = time() + (60 * 60 * 24); // 1 gün
setcookie("tercih_renk", "mavi", $gecerlilik_suresi, "/"); // "/" ile tüm sitede geçerli yapar
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Çerez (Cookie) Yönetimi</title>
</head>
<body>

<h1>PHP Çerez (Cookie) Yönetimi Örneği</h1>

<?php
echo "<h3>1. Cookie Atama Sonucu</h3>";
echo "<p style='color: blue;'>Tercih edilen renk 'mavi' olarak cookie'ye kaydedilme komutu gönderildi. (Tarayıcı kabul etmelidir)</p>";
echo "<p>Cookie 1 gün boyunca geçerli olacaktır.</p>";

echo "<h3>2. Cookie Okuma (Bir Sonraki Yüklemede Geçerli Olur)</h3>";

// 2. Cookie Okuma
// Cookie'ler $_COOKIE süper-global değişkeni ile okunur
if (isset($_COOKIE["tercih_renk"])) {
    echo "<p style='color: green;'>Kaydedilen tercihiniz: <b>" . $_COOKIE["tercih_renk"] . "</b></p>";
} else {
    echo "<p style='color: orange;'>Renk tercihiniz bu yüklemede henüz kayıtlı değil veya silinmiş.</p>";
}

echo "<h3>Cookie Silme Notu</h3>";
echo "<p>Cookie silme işlemi için aşağıdaki satırın yorumunu kaldırıp, sayfayı yenileyebilirsiniz:</p>";
echo '<code>// setcookie("tercih_renk", "", time() - 3600, "/");</code>';

// 3. Cookie Silme (Test etmek için bu satırın başındaki // işaretlerini kaldırın)
// setcookie("tercih_renk", "", time() - 3600, "/"); 
?>

<p>
    <strong>NOT:</strong> Çerezleri tam olarak test etmek için sayfayı **iki kez** yüklemeniz/yenilemeniz gerekir.
</p>

</body>
</html>