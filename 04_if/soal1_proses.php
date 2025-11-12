<?php
// Ambil input tahun dari form
$tahun = $_POST['tahun'];

// Syarat Tahun Kabisat:
// 1. Habis dibagi 4 dan tidak habis dibagi 100, atau
// 2. Habis dibagi 400
if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    $status = "adalah Tahun Kabisat.";
} else {
    $status = "bukan Tahun Kabisat.";
}

echo "<h2>Hasil Pengecekan</h2>";
echo "Tahun $tahun $status";
?>