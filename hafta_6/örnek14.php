<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Çok Boyutlu Dizi Örneği</title>
</head>
<body>

<h1>İç İçe (Çok Boyutlu) Dizi Örneği</h1>

<?php
$ogrenciler = [
    [
        "ad" => "Ali",
        "puanlar" => [80, 90, 85]
    ],
    [
        "ad" => "Veli",
        "puanlar" => [75, 95, 100]
    ],
    [
        "ad" => "Ayşe",
        "puanlar" => [90, 90, 90]
    ]
];

// Tek bir değere doğrudan erişim
echo "<h3>Tekli Veri Erişimi</h3>";
echo $ogrenciler[1]["ad"] . " adlı öğrencinin 2. puanı: " . $ogrenciler[1]["puanlar"][1]; // Çıktı: Veli'nin 2. puanı: 95
echo "<hr>";

echo "<h3>Tüm Öğrenci Notları (İç İçe Döngü)</h3>";
foreach ($ogrenciler as $ogrenci) {
    echo "<b>{$ogrenci['ad']}</b>: ";
    
    // İç içe döngü: Her öğrencinin puanlar dizisinde gezinir
    $toplam_puan = 0;
    $puan_sayisi = 0;

    foreach ($ogrenci['puanlar'] as $puan) {
        echo "<span style='margin-right: 5px; color: blue;'>$puan</span> ";
        $toplam_puan += $puan;
        $puan_sayisi++;
    }
    
    // Ek bilgi: Ortalama hesaplama
    $ortalama = ($puan_sayisi > 0) ? round($toplam_puan / $puan_sayisi, 2) : 0;
    echo " (Ortalama: <span style='color: green; font-weight: bold;'>$ortalama</span>)";
    echo "<br>";
}
?>

</body>
</html>