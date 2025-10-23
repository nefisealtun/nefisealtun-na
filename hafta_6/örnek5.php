<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fonksiyon Örnekleri</title>
</head>
<body>

<?php
echo "<h3>Basit Fonksiyon Örneği</h3>";

// Basit, parametre almayan fonksiyon
function selamVer() {
    echo "Merhaba! <br>";
}
// Fonksiyonu çağırma
selamVer();

echo "<h3>Parametre Alan Fonksiyon Örneği</h3>";

// Parametre alan fonksiyon
function selamIsimle($isim) {
    echo "Merhaba, $isim! <br>";
}
selamIsimle("Ayşe");
selamIsimle("Mehmet");

echo "<h3>Değer Döndüren (Return) Fonksiyon Örneği</h3>";

// Değer döndüren (return) fonksiyon
function topla($sayi1, $sayi2) {
    $sonuc = $sayi1 + $sayi2;
    return $sonuc; // Hesaplanan değeri geri döndürür
}
$toplam = topla(10, 15);
echo "10 + 15 = $toplam";
?>

</body>
</html>