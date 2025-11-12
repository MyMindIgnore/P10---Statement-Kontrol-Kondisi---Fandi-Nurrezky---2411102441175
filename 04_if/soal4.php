<?php
// Mengambil angka bulan saat ini (1 sampai 12)
$bulan_angka = date("n");

// Menggunakan SWITCH untuk menentukan nama bulan dan jumlah hari
switch ($bulan_angka) {
    case 1:
        $nama_bulan = "Januari";
        $jumlah_hari = 31;
        break;
    case 2:
        $nama_bulan = "Februari";
        // Untuk Februari, perlu cek kabisat (asumsi tahun sekarang)
        $tahun_sekarang = date("Y");
        if (($tahun_sekarang % 4 == 0 && $tahun_sekarang % 100 != 0) || ($tahun_sekarang % 400 == 0)) {
            $jumlah_hari = 29; // Tahun kabisat
        } else {
            $jumlah_hari = 28; // Bukan tahun kabisat
        }
        break;
    case 3:
        $nama_bulan = "Maret";
        $jumlah_hari = 31;
        break;
    case 4:
        $nama_bulan = "April";
        $jumlah_hari = 30;
        break;
    case 5:
        $nama_bulan = "Mei";
        $jumlah_hari = 31;
        break;
    case 6:
        $nama_bulan = "Juni";
        $jumlah_hari = 30;
        break;
    case 7:
        $nama_bulan = "Juli";
        $jumlah_hari = 31;
        break;
    case 8:
        $nama_bulan = "Agustus";
        $jumlah_hari = 31;
        break;
    case 9:
        $nama_bulan = "September";
        $jumlah_hari = 30;
        break;
    case 10:
        $nama_bulan = "Oktober";
        $jumlah_hari = 31;
        break;
    case 11:
        $nama_bulan = "November";
        $jumlah_hari = 30;
        break;
    case 12:
        $nama_bulan = "Desember";
        $jumlah_hari = 31;
        break;
    default:
        $nama_bulan = "Tidak Dikenal";
        $jumlah_hari = "Tidak Ditemukan";
        break;
}

echo "<h2>Jumlah Hari Bulan Saat Ini</h2>";
echo "Bulan saat ini (**$nama_bulan**) memiliki **$jumlah_hari** hari.";
?>