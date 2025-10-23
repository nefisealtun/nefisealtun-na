<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Varsayılan Parametre Örneği</title>
</head>
<body>

<h1>Fonksiyonlarda Varsayılan Parametre Kullanımı</h1>

<?php
// $mesaj parametresi opsiyoneldir, varsayılan değeri "Hoş geldin"
function selamla($isim, $mesaj = "Hoş geldin") {
    echo "$mesaj, $isim! <br>";
}

echo "<h3>1. Varsayılan Değeri Kullanma:</h3>";
// Varsayılan mesajı kullanır (mesaj parametresi girilmedi)
selamla("Ahmet"); 

echo "<h3>2. Parametreyi Değiştirme:</h3>";
// Kendi mesajımızı göndeririz (mesaj parametresi girildi)
selamla("Ayşe", "Görüşürüz"); 
?>

<p>
    <em>selamla("Ahmet") çağrısı, <code>$mesaj</code> için varsayılan değer olan "Hoş geldin"i kullandı.</em>
</p>
<p>
    <em>selamla("Ayşe", "Görüşürüz") çağrısı ise, "Görüşürüz" değerini kullandı.</em>
</p>

</body>
</html>