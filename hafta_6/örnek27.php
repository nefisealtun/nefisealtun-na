<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Statik Üyeler Örneği</title>
</head>
<body>

<h1>PHP Statik Özellikler ve Metotlar</h1>

<?php
class Matematik {
    // Statik özellik (değişken): Sınıfa aittir, nesneye değil.
    public static $pi = 3.14159;

    // Statik metot (fonksiyon): Sınıfa aittir, nesneye değil.
    public static function topla(int $a, int $b): int {
        return $a + $b;
    }

    // Statik bir metot, statik bir özelliğe 'self::' ile erişir.
    public static function daireAlan($yaricap) {
        return self::$pi * $yaricap * $yaricap;
    }
}

echo "<h3>Statik Metot ve Özellik Kullanımı</h3>";

// Nesne oluşturmaya GEREK YOK!
// SınıfAdı::MetotAdı veya SınıfAdı::$OzellikAdı şeklinde kullanılır.
echo "<p>5 + 8 = <strong>" . Matematik::topla(5, 8) . "</strong></p>";
echo "<p>Pi sayısı: <strong>" . Matematik::$pi . "</strong></p>";

echo "<h3>Daire Alanı Hesaplama</h3>";
$alan = Matematik::daireAlan(10);
echo "<p>Yarıçapı 10 olan dairenin alanı: <strong>" . round($alan, 2) . "</strong></p>";

echo "<hr>";
echo "<em>Bu metot ve özelliklere erişmek için <code>new Matematik()</code> yapmadığımıza dikkat edin.</em>";
?>

</body>
</html>