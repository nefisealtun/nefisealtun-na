<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP Deneme</title>
</head>
<body>

<?php
// Bu bir yorum satırıdır.

// Ekrana "Merhaba Dünya!" yazar.
echo "Merhaba Dünya!";

// --- DEĞİŞKENLER ---
$mesaj = "PHP öğreniyorum."; // String (Metin)
$yil = 2025; // Integer (Tamsayı)
$pi_sayisi = 3.14; // Float / Double (Ondalıklı sayı)
$ogrenci_mi = true; // Boolean (true veya false)

// Çıktı verirken değişkenleri kullanma
echo "<br>";
echo $mesaj;
echo "<br>";
echo "Bu yıl " . $yil . " yılıdır.";

// Değişkenin içindeki değeri doğrudan metne gömmek
echo "<br>";
echo "Pi sayısı yaklaşık olarak $pi_sayisi değerindedir.";
?>

</body>
</html>
