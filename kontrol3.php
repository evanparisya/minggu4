<?php
$totalPoin = 600; 

if ($totalPoin > 500) {
    $hadiah = "YA";
} else {
    $hadiah = "TIDAK";
}

echo "Total skor pemain adalah: " . $totalPoin . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;
?>