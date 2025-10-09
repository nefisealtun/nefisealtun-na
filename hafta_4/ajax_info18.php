<?php
// Gelen 'q' parametresini yakala ve temizle
$q = $_GET['q'];

// Müşteri verilerini simüle eden bir dizi (Gerçek uygulamada burası SQL sorgusu olur)
$customers = array(
  "ALFKI" => array("Alfreds Futterkiste", "Maria Anders", "Germany"),
  "NORTS" => array("North/South", "Simon Crowther", "UK"),
  "WOLZA" => array("Wolski Zajazd", "Zbyszek Piestrzeniewicz", "Poland")
);

$hint = "";

// Eğer geçerli bir müşteri seçimi varsa
if (array_key_exists($q, $customers)) {
  $customer = $customers[$q];
  
  // HTML tablo yapısını oluştur
  $hint = "<table border='1'>";
  $hint .= "<tr><th>Şirket Adı</th><th>İletişim Kişisi</th><th>Ülke</th></tr>";
  $hint .= "<tr>";
  
  // Dizideki verileri tablo hücrelerine yerleştir
  for ($i = 0; $i < count($customer); $i++) {
    $hint .= "<td>" . $customer[$i] . "</td>";
  }
  
  $hint .= "</tr>";
  $hint .= "</table>";
} else {
  $hint = "Müşteri bulunamadı.";
}

// Oluşturulan tabloyu veya mesajı geri döndür
echo $hint;

?>