<?php
$hargaAwal = 120000;

$diskon = 20;

$jumlahDiskon = ($hargaAwal * $diskon) / 100;

$hargaSetelahDiskon = $hargaAwal - $jumlahDiskon;

echo "Harga awal produk: Rp. {$hargaAwal}";
echo "<br>";
echo "Jumlah diskon: Rp. {$jumlahDiskon}";
echo "<br>";
echo "Harga setelah diskon: Rp. {$hargaSetelahDiskon}";
?>