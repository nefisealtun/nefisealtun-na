<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kalıtım (Inheritance) Örneği</title>
</head>
<body>

<h1>PHP Nesne Yönelimli Programlama - Kalıtım</h1>

<?php
// Üst Sınıf (Parent Class)
class Hayvan {
    public $isim;
    // protected: Sadece bu sınıf ve onu miras alanlar erişebilir
    protected $ses; 

    public function __construct($isim, $ses) {
        $this->isim = $isim;
        $this->ses = $ses;
    }

    public function sesCikar() {
        echo "<p><strong>$this->isim</strong> '$this->ses' diye ses çıkarır.</p>";
    }
}

// Alt Sınıf (Child Class) - 'Hayvan' sınıfını miras alır
class Kedi extends Hayvan {
    // Üst sınıfın kurucusunu (constructor) çağırabiliriz
    public function __construct($isim) {
        // 'parent::' üst sınıfı temsil eder, kedinin varsayılan sesi "Miyav" olur
        parent::__construct($isim, "Miyav");
        echo "<p style='color: blue;'>Yeni bir Kedi nesnesi ($isim) oluşturuldu.</p>";
    }

    // Kedi sınıfına özel bir metot
    public function mirlar() {
        echo "<p style='color: green;'><strong>$this->isim</strong> mırıldıyor...</p>";
    }
    
    // Üst sınıftan gelen bir metodu kendi ihtiyacına göre değiştirebilir (override)
    public function sesCikar() {
        // Burada $this->ses'e erişebiliyoruz çünkü 'protected' olarak tanımlanmıştı.
        echo "<p>Kedi <strong>$this->isim</strong>, 'Mırr $this->ses Mırr' diye özel bir ses çıkarır.</p>";
    }
}

$tekir = new Kedi("Tekir");
echo "<hr>";
echo "<h3>Mirastan Gelen Metotlar:</h3>";
$tekir->sesCikar(); // Üst sınıftan alınan ve override edilen metot
echo "<h3>Kendi Metotları:</h3>";
$tekir->mirlar(); // Kendi metodu
?>

</body>
</html>