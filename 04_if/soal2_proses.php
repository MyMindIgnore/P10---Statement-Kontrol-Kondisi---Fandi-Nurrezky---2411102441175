<?php
// Ambil input jam kerja
$jam_kerja = $_POST['jam_kerja'];
$normal = 2000;
$lembur = 3000;
$jam_normal_max = 48;
$total_upah = 0;

if ($jam_kerja > $jam_normal_max) {
    // Hitung upah jam normal
    $upah_jam_normal = $jam_normal_max * $normal;
    
    // Hitung upah jam lembur
    $jam_lembur = $jam_kerja - $jam_normal_max;
    $upah_jam_lembur = $jam_lembur * $lembur;
    
    // Total upah
    $total_upah = $upah_jam_normal + $upah_jam_lembur;
} else {
    // Jika jam kerja <= jam normal
    $total_upah = $jam_kerja * $normal;
}

echo "<h2>Hasil Perhitungan Upah</h2>";
echo "Jumlah Jam Kerja: $jam_kerja jam<br>";
echo "Total Upah yang diterima: Rp. " . number_format($total_upah, 0, ',', '.') . ",";
?>