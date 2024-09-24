<?php
// no. 19
$nilaiSw = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$semuaNl = 0;
foreach ($nilaiSw as $nl) {
    $semuaNl++;
}

for ($i=0; $i < $semuaNl - 1; $i++) { 
    for ($j=0; $j < $semuaNl - 1 - $i; $j++) { 
        if ($nilaiSw[$j] > $nilaiSw[$j + 1]) {
            $temp = $nilaiSw[$j];
            $nilaiSw[$j] = $nilaiSw[$j + 1];
            $nilaiSw[$j + 1] = $temp;
        }
    }
}


echo "Nilai dari yang terendah : "
;
for ($i=0; $i < $semuaNl; $i++) { 
    echo $nilaiSw[$i] . " ";
}

echo "<br>";

$nlAkhir = 0;
echo "Nilai setelah 2 tertinggi atas dan 2 tertinggi bawah dihilangkan : ";
for ($i=2; $i < $semuaNl - 2; $i++) { 
    echo $nilaiSw[$i] . " ";
    $nlAkhir += $nilaiSw[$i];
}

echo "<br> Nilai Akhir : " . $nlAkhir;

?>