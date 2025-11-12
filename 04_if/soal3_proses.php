<?php
$jam_kerja = $_POST['jam_kerja'];
$golongan = $_POST['golongan'];

$upah_lembur = 3000;
$jam_normal_max = 48;
$upah_per_jam_normal = 0;
$total_upah = 0;

if ($golongan == 'A') {
    $upah_per_jam_normal = 4000;
} elseif ($golongan == 'B') {
    $upah_per_jam_normal = 5000;
} elseif ($golongan == 'C') {
    $upah_per_jam_normal = 6000;
} elseif ($golongan == 'D') {
    $upah_per_jam_normal = 7500;
}

if ($jam_kerja > $jam_normal_max) {
    $upah_jam_normal = $jam_normal_max * $upah_per_jam_normal;
    $jam_lembur = $jam_kerja - $jam_normal_max;
    $upah_jam_lembur = $jam_lembur * $upah_lembur;
    $total_upah = $upah_jam_normal + $upah_jam_lembur;
} else {
    $total_upah = $jam_kerja * $upah_per_jam_normal;
}

echo "<h2>Hasil Perhitungan Upah</h2>";
echo "Golongan: $golongan<br>";
echo "Jumlah Jam Kerja: $jam_kerja jam<br>";
echo "Upah Normal per Jam: Rp. " . number_format($upah_per_jam_normal, 0, ',', '.') . ",<br>";
echo "Total Upah yang diterima: Rp. " . number_format($total_upah, 0, ',', '.') . ",";
?>