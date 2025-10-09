<?php
// PHP'de "q" parametresini yakala
$q = $_REQUEST["q"];

// Arama yapılacak isim listesi
$a = ["Ahmet", "Ayşe", "Burak", "Cem", "Deniz", "Ebru", "Fırat", "Gizem", "Halil", "Irem", "Kaan", "Lale", "Mustafa", "Nergis", "Osman", "Pınar", "Rıza", "Selin", "Tarık", "Umut", "Yusuf", "Zeynep"];

$hint = "";

// Eğer arama sorgusu (q) boş değilse
if ($q !== "") {
    $q = strtolower($q); // Küçük harfe çevir
    $len = strlen($q);

    // İsim listesinde arama yap
    foreach($a as $name) {
        // İsim, arama sorgusu ile başlıyorsa
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name; // İlk öneriyi yakala
            } else {
                $hint .= ", " . $name; // Diğer önerileri ekle
            }
        }
    }
}

// Sonucu döndür: Öneri bulunduysa önerileri, bulunmadıysa "öneri yok" mesajını gönder
echo $hint === "" ? "Öneri yok" : $hint;
?>