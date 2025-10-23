<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Anonim (Lambda) Fonksiyonlar</title>
</head>
<body>

<h1>PHP Anonim Fonksiyonlar Örneği</h1>

<?php
$sayilar = [1, 2, 3, 4, 5];
echo "<h3>1. array_map ile Anonim Fonksiyon Kullanımı</h3>";
echo "Orijinal Dizi: ";
echo "<pre>"; print_r($sayilar); echo "</pre>";

// array_map örneğini anonim fonksiyon ile yapalım
$kareler = array_map(function($n) {
    return $n * $n;
}, $sayilar);

echo "Array_map Sonucu (Kareler): ";
echo "<pre>";
print_r($kareler);
echo "</pre>";
// Çıktı: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

echo "<hr>";

echo "<h3>2. Değişkene Atanan Anonim Fonksiyon</h3>";
// Değişkene atama (Bu tür fonksiyonlara bazen "Kapanış" (Closure) da denir)
$carpma = function(int $a, int $b): int {
    return $a * $b;
};

echo "<code>\$carpma(5, 6)</code> sonucu: ";
echo "<b>" . $carpma(5, 6) . "</b>"; // Çıktı: 30
?>

</body>
</html>