<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yaş Kontrolü</title>
</head>
<body>

<?php
    $yas = 19; // Yaşı değiştirebilirsiniz.

    if ($yas >= 18) {
        echo "Ehliyet alabilirsiniz.";
    } elseif ($yas >= 16) {
        echo "Ehliyet alamazsınız ama stajyer ehliyet için başvurabilirsiniz.";
    } else {
        echo "Ehliyet alamazsınız.";
    }

    echo "<hr>"; // HTML'de yatay bir çizgi çizer
?>

</body>
</html>