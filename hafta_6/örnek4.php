<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dizi Örnekleri</title>
</head>
<body>

<?php
// 1. İndeksli Dizi (Numeric/Indexed Array)
// İndeksler 0'dan başlar.
$meyveler = ["Elma", "Armut", "Muz", "Çilek"];
echo "<h3>İndeksli Dizi Örneği</h3>";
echo "İlk meyve: " . $meyveler[0] . "<br>"; // Çıktı: Elma
echo "Üçüncü meyve: " . $meyveler[2] . "<br>"; // Çıktı: Muz
// Diziye yeni eleman ekleme
$meyveler[] = "Karpuz";

// 2. İlişkisel Dizi (Associative Array)
// Anahtar (key) -> Değer (value) çiftleri kullanılır.
$kisi = [
    "ad" => "Ahmet",
    "soyad" => "Yılmaz",
    "yas" => 30,
    "meslek" => "Mühendis"
];
echo "<h3>İlişkisel Dizi Örneği</h3>";
echo $kisi["ad"] . " " . $kisi["soyad"] . ", " . $kisi["yas"] . " yaşında bir " . $kisi["meslek"] . "tir.";
echo "<hr>";

// --- Foreach Döngüsü ---
// Diziler üzerinde gezinmek için en kolay yoldur.
echo "<h3>Tüm Meyve Listesi (Foreach)</h3>";
echo "<ul>";
foreach ($meyveler as $meyve) {
    echo "<li>$meyve</li>";
}
echo "</ul>";

// İlişkisel dizide gezinme
echo "<h3>Kişi Bilgileri (Foreach)</h3>";
foreach ($kisi as $anahtar => $deger) {
    // İlk harfi büyük yapma örneği için 'ucfirst' kullanılmıştır.
    echo ucfirst($anahtar) . " : $deger <br>"; 
}
?>

</body>
</html>