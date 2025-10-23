<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON Encode ve Decode Örneği</title>
</head>
<body>

<h1>PHP JSON İşlemleri</h1>

<?php
// 1. PHP Dizisini JSON'a Çevirme (json_encode)
$veri_dizisi = [
    "id" => 101,
    "isim" => "Hızlı ve Öfkeli",
    "kategoriler" => ["Aksiyon", "Suç"]
];

// JSON_PRETTY_PRINT: Çıktıyı daha okunaklı (girintili) yapar
$json_metni = json_encode($veri_dizisi, JSON_PRETTY_PRINT); 

echo "<h3>1. PHP Dizisinden JSON'a:</h3>";
echo "<p><code>json_encode</code> ile dönüştürülen veri:</p>";
echo "<pre style='background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd;'>";
echo $json_metni; // <pre> etiketi formatı korur
echo "</pre>";

echo "<hr>";

// 2. JSON Metnini PHP'ye Çevirme (json_decode)
$gelen_json = '{ "kullanici": "admin", "sifre_hash": "abc123xyz" }';

// json_decode($metin) -> true eklenmezse PHP nesnesi (object) döndürür
$php_nesnesi = json_decode($gelen_json);

echo "<h3>2. JSON'dan PHP Nesnesine Dönüşüm:</h3>";
echo "<p><code>json_decode(\$gelen_json)</code> ile elde edildi.</p>";
echo "Kullanıcı (Nesne erişimi: <code>-></code>): <b>" . $php_nesnesi->kullanici . "</b><br>"; 
echo "Şifre Hash (Nesne erişimi: <code>-></code>): <b>" . $php_nesnesi->sifre_hash . "</b><br>";

echo "<hr>";

// json_decode($metin, true) -> true eklenirse PHP dizisi (array) döndürür
$php_dizisi = json_decode($gelen_json, true);

echo "<h3>3. JSON'dan PHP İlişkisel Dizisine Dönüşüm:</h3>";
echo "<p><code>json_decode(\$gelen_json, true)</code> ile elde edildi.</p>";
echo "Kullanıcı (Dizi erişimi: <code>[]</code>): <b>" . $php_dizisi["kullanici"] . "</b><br>"; 
echo "Şifre Hash (Dizi erişimi: <code>[]</code>): <b>" . $php_dizisi["sifre_hash"] . "</b><br>";
?>

</body>
</html>