<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array_Map Fonksiyonu Örneği</title>
</head>
<body>

<h1>Array_Map Fonksiyonu</h1>

<?php
// Sayıların karesini alan bir fonksiyon
function karesiniAl($n) {
    return $n * $n;
}

$sayilar = [1, 2, 3, 4, 5];

echo "<h3>1. Orijinal Dizi:</h3>";
echo "<pre>"; print_r($sayilar); echo "</pre>";

// 'karesiniAl' fonksiyonunu $sayilar dizisindeki her elemana uygula
$kareler = array_map("karesiniAl", $sayilar);

echo "<h3>2. Array_Map ile Kareleri Alınan Dizi:</h3>";
echo "<pre>";
print_r($kareler); 
echo "</pre>";
// Çıktı: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

echo "<p><code>array_map</code>, <code>karesiniAl</code> fonksiyonunu dizideki her elemana uygulayarak yeni bir dizi oluşturmuştur.</p>";
?>

</body>
</html>