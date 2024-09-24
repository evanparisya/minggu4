<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

echo "<br><br>";
// no. 15
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
// no. 16
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

echo "<br><br>";
// no. 17
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah : $totalSkor";

echo "<br><br>";

// no. 18
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>"
// no. 19


$nilaiSw = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$semuaNl = 0;
foreach ($nilaiSw as $nl) {
    $semuaNl++;
}

for ($i=0; $i < $semuaNl - 1; $i++) { 
    for ($j=0; $j < $semuaNl - 1 - $i; $j++) { 
        if ($nl[$j] > $nl[$j + 1]) {
            $temp = $nl[$j];
            $nl[$j] = $nilai[$j + 1];
            $nl[$j + 1] = $temp;
        }
    }
}

echo "Nilai keseluruhan : $nilaiSw <br>";
?>