<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch-Case Örneği</title>
</head>
<body>

<h1>Switch-Case İle Gün Kontrolü</h1>

<?php
$gun_kodu = "Car"; // Çarşamba (Bu değeri "Pzt", "Pzr" veya "XXX" olarak değiştirebilirsiniz)

echo "<h2>Girilen Kod: " . $gun_kodu . "</h2>";
echo "<p>Sonuç: ";

switch ($gun_kodu) {
    case "Pzt":
        echo "Bugün Pazartesi.";
        break; // break: Koşul sağlanırsa switch'ten çık
    case "Sal":
        echo "Bugün Salı.";
        break;
    case "Car":
        echo "Bugün Çarşamba.";
        break;
    case "Per":
        echo "Bugün Perşembe.";
        break;
    case "Cum":
        echo "Bugün Cuma.";
        break;
    case "Cmt":
    case "Pzr": // Birden fazla 'case' aynı sonucu verebilir
        echo "Hafta sonu!";
        break;
    default: // Hiçbiri eşleşmezse
        echo "Geçersiz gün kodu.";
        break;
}

echo "</p>";
?>

</body>
</html>