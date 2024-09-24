<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// no. 9
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// no. 10
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// no. 11
$hasil1 = $a += $b;
$hasil2 = $a -= $b;
$hasil3 = $a *= $b;
$hasil4 = $a /= $b;
$hasil5 = $a %= $b;

// no. 12
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasil tambah : {$hasilTambah} <br>";
echo "hasil kurang : {$hasilKurang} <br>";
echo "hasil kali   : {$hasilKali} <br>";
echo "hasil bagi   : {$hasilBagi} <br>";
echo "sisa bagi    : {$sisaBagi} <br>";
echo "pangkat      : {$pangkat} <br>";

echo "<br>";
echo "hasil sama             : {$hasilSama} <br>";
echo "hasil tidak sama       : {$hasilTidakSama} <br>";
echo "hasil lebih kecil      : {$hasilLebihKecil} <br>";
echo "hasil lebih besar      : {$hasilLebihBesar} <br>";
echo "hasil lebih kecil sama : {$hasilLebihKecilSama} <br>";
echo "hasil lebih besar sama : {$hasilLebihBesarSama} <br>";

echo "<br>";
echo "hasil And   : {$hasilAnd} <br>";
echo "hasil Or    : {$hasilOr} <br>";
echo "hasil not A : {$hasilNotA} <br>";
echo "hasil not B : {$hasilNotB} <br>";

echo "<br>";
echo "hasil dari a += b : {$hasil1} <br>";
echo "hasil dari a -= b : {$hasil2} <br>";
echo "hasil dari a *= b : {$hasil3} <br>";
echo "hasil dari a /= b : {$hasil4} <br>";
echo "hasil dari a %= b : {$hasil5} <br>";

echo "<br>";
echo "hasil identik : {$hasilIdentik} <br>";
echo "hasil tidak identik : {$hasilTidakIdentik} <br>";
?>