<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Sınıf Örneği</title>
</head>
<body>

<h1>PHP Nesne Yönelimli Programlama (OOP) Örneği</h1>

<?php
// Bir "Araba" Sınıfı (Class) tanımlayalım.
// Bu bir şablondur.
class Araba {
    // Özellikler (Properties / Değişkenler)
    public $marka;
    public $renk;
    private $hiz = 0; // private: Sadece sınıf içinden erişilebilir

    // Kurucu Metot (Constructor)
    // Nesne 'new' anahtar kelimesiyle oluşturulduğunda otomatik çalışır.
    public function __construct($marka, $renk) {
        $this->marka = $marka; // $this, bu sınıfın kendisini temsil eder
        $this->renk = $renk;
        echo "<p style='color: blue;'>$this->marka ($this->renk) nesnesi oluşturuldu.</p>";
    }

    // Metotlar (Methods / Fonksiyonlar)
    public function hizlan($artis) {
        $this->hiz += $artis;
        echo "<strong>$this->marka</strong> hızlandı. Yeni hız: <span style='color: green;'>$this->hiz km/s</span> <br>";
    }

    public function yavasla($azalis) {
        $this->hiz -= $azalis;
        if ($this->hiz < 0) {
            $this->hiz = 0;
        }
        echo "<strong>$this->marka</strong> yavaşladı. Yeni hız: <span style='color: orange;'>$this->hiz km/s</span> <br>";
    }

    public function mevcutHiz() {
        return $this->hiz;
    }
}

// Şimdi bu sınıftan (şablondan) nesneler (object) oluşturalım.
$araba1 = new Araba("BMW", "Siyah");
$araba2 = new Araba("Mercedes", "Beyaz");
echo "<hr>";

// Nesnelerin metotlarını kullanalım
echo "<h3>Araba 1 (BMW) Hareketleri:</h3>";
$araba1->hizlan(50);
$araba1->hizlan(20);
$araba1->yavasla(30);
echo "<hr>";

echo "<h3>Araba 2 (Mercedes) Hareketi:</h3>";
$araba2->hizlan(80);
echo "<hr>";

echo "<strong>Özet:</strong> <br>";
echo "BMW'nin son hızı: " . $araba1->mevcutHiz() . " km/s <br>";
echo "Mercedes'in son hızı: " . $araba2->mevcutHiz() . " km/s <br>";

// 'hiz' private olduğu için dışarıdan erişilemez.
// Aşağıdaki satırı aktif ederseniz HATA alırsınız:
// echo $araba1->hiz; 
?>

</body>
</html>