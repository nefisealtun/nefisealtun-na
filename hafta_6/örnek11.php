<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If-Else ve Ternary Örneği</title>
</head>
<body>

<h1>If-Else ve Ternary Operatörü ile Durum Kontrolü</h1>

<?php
$sicaklik = 15; // Sıcaklık değerini değiştirebilirsiniz
echo "<h2>Mevcut Sıcaklık: " . $sicaklik . "°C</h2>";

// Geleneksel if-else
echo "<h3>1. Geleneksel If-Else Kullanımı:</h3>";
if ($sicaklik > 10) {
    $durum = "Hava ılık.";
} else {
    $durum = "Hava soğuk.";
}
echo "<p>Sonuç: <strong>" . $durum . "</strong></p>";

echo "<h3>2. Ternary Operatör Kullanımı:</h3>";
// Ternary Operatör ile
// (koşul) ? (doğruysa_bu) : (yanlışsa_bu);
$durum_kisa = ($sicaklik > 10) ? "Hava ılık." : "Hava soğuk.";
echo "<p>Sonuç: <strong>" . $durum_kisa . "</strong></p>";
?>

<hr>
<p>
    <em>Koşul: Sıcaklık 10'dan büyükse hava ılık, değilse hava soğuk.</em>
</p>

</body>
</html>