<?php
// Jumlah total kursi
$totalKursi = 45;

// Jumlah kursi yang terisi
$kursiTerisi = 28;

// Menghitung jumlah kursi yang kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "Total kursi kosong:  {$kursiKosong}  kursi<br>";
echo "Persentase kursi kosong:  {$persentaseKosong}%";
?>