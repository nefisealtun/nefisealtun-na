<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Do-While Döngüsü Örneği</title>
</head>
<body>

<h1>While ve Do-While Döngüleri</h1>

<?php
$sayac = 10;
echo "<h2>Başlangıç Sayacı: $sayac</h2>";

echo "<h3>1. While Döngüsü (Koşul Baştan Yanlış)</h3>";
// while döngüsü bu koşulda hiç çalışmaz
while ($sayac < 5) {
    echo "Bu yazı hiç görünmeyecek.";
    $sayac++;
}
echo "<p>While döngüsü çalışmadı, çünkü \$sayac (10) < 5 koşulu baştan yanlıştı.</p>";

echo "<hr>";

echo "<h3>2. Do-While Döngüsü (Koşul Sonda Yanlış)</h3>";
// do-while en az bir kez çalışır
do {
    echo "Sayaç: <strong>$sayac</strong> (Koşul yanlış olsa bile 1 kez çalıştı) <br>";
    $sayac++;
} while ($sayac < 5); // Koşul burada kontrol ediliyor

echo "<p>Do-While döngüsü en az 1 kez çalıştı, çünkü koşul (\$sayac < 5) döngü sonunda kontrol edildi.</p>";
?>

</body>
</html>