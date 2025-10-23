<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tip İpuçları (Type Hinting) Örneği</title>
</head>
<body>

<?php
// PHP'nin katı tip kontrolü modunu etkinleştirir.
// Bu olmadan, PHP string'i int'e dönüştürmeye çalışır (koersiyon).
declare(strict_types=1); 
?>

<h1>PHP Fonksiyonlarda Tip Zorlama (Type Hinting)</h1>

<?php
// Sadece int (tamsayı) kabul edip, sadece int döndüreceğini garanti eder.
function topla(int $a, int $b): int {
    echo "<p>Toplanan değerler: $a ve $b</p>";
    return $a + $b;
}

echo "<h3>1. Geçerli Çağrı (int ve int):</h3>";
echo "Sonuç: <b>" . topla(5, 10) . "</b> <br>"; 

echo "<hr>";

echo "<h3>2. Hatalı Çağrı (string gönderimi):</h3>";
echo "<p>PHP'de <code>declare(strict_types=1);</code> etkin olduğu için aşağıdaki çağrı ölümcül bir hata (Fatal Error) verir ve kod burada durur:</p>";

// Eğer strict_types=1 kullanıyorsanız, aşağıdaki satır bir hata (TypeError) fırlatır ve program durur:
// echo topla(5, "10 elma"); 
?>

<p style="color: red;">
    (Yukarıdaki kod çalıştırıldığında, hatalı çağrı satırının yorum satırı olarak bırakıldığını varsayıyoruz. 
    Aksi takdirde, tarayıcıda bir hata mesajı görünecektir.)
</p>

</body>
</html>