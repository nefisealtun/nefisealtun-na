<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dizi Fonksiyonları</title>
</head>
<body>

<h1>PHP Dizi Fonksiyonları Örneği</h1>

<?php
$rakamlar = [3, 1, 4, 1, 5, 9, 2];
echo "<h3>Başlangıç Dizisi:</h3>";
echo "<pre>"; print_r($rakamlar); echo "</pre>";

echo "<h3>1. Dizi Eleman Sayısı (count)</h3>";
// 1. Dizi eleman sayısı
echo "Eleman sayısı: " . count($rakamlar) . "<br>"; // 7

echo "<h3>2. Eleman Kontrolü (in_array)</h3>";
// 2. Bir elemanın dizide olup olmadığını kontrol etme
if (in_array(5, $rakamlar)) {
    echo "Dizide '5' rakamı var.<br>";
}

echo "<h3>3. Diziyi Sıralama (sort)</h3>";
// 3. Diziyi sıralama (küçükten büyüğe)
sort($rakamlar);
echo "<p>Sıralanmış hali:</p>";
echo "<pre>"; 
print_r($rakamlar); // print_r(): Bir dizinin içeriğini okunabilir şekilde basar
echo "</pre>";

echo "<h3>4. Diziyi Tersten Sıralama (rsort)</h3>";
// 4. Diziyi tersten sıralama (büyükten küçüğe)
rsort($rakamlar);
echo "<p>Tersten sıralanmış hali:</p>";
echo "<pre>";
print_r($rakamlar);
echo "</pre>";

echo "<h3>5. İlişkisel Dizide Anahtarları Alma (array_keys)</h3>";
// 5. İlişkisel dizide anahtarları alma
$kisi = ["ad" => "Ahmet", "yas" => 30];
$anahtarlar = array_keys($kisi);
echo "<p>Kişi dizisinin anahtarları:</p>";
echo "<pre>";
print_r($anahtarlar); // Çıktı: [0] => ad, [1] => yas
echo "</pre>";
?>

</body>
</html>