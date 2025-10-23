<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>PHP Form Örneği</title>
</head>
<body>
<?php
// PHP'nin oluşturduğu mesajı burada göster
echo $mesaj;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="ad">Adınız:</label>
<input type="text" id="ad" name="kullanici_adi">
<input type="submit" value="Gönder">
</form>
<hr>
<?php
// --- GET Metodu Örneği ---
// GET metodu veriyi URL üzerinden taşır.
// Örnek URL: http://.../form.php?urun=laptop&fiyat=1500
if (isset($_GET["urun"])) { // URL'de 'urun' diye bir değişken var mı?
$urun_adi = htmlspecialchars($_GET["urun"]);
echo "<p>Şu anda '$urun_adi' adlı ürünü inceliyorsunuz.</p>";
}
?>
</body>
</html>