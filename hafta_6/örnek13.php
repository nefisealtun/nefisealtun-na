<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Continue ve Break Örneği</title>
</head>
<body>

<h1>Continue ve Break Kullanımı</h1>

<?php
echo "<h3>Continue (Çift sayıları atla)</h3>";
echo "<p>1'den 10'a kadar olan sayılardan sadece tek olanlar yazdırılır:</p>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) { // Eğer sayı çiftse (kalan 0 ise)
        continue; // Bu adımı atla, döngünün başına dön
    }
    echo "$i <br>";
}

echo "<hr>";

echo "<h3>Break (5'i bulunca dur)</h3>";
echo "<p>1'den başlayarak, sayı 5 olduğunda döngü tamamen sonlandırılır:</p>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Döngüyü tamamen kır (sonlandır)
    }
    echo "$i <br>";
}
?>

</body>
</html>