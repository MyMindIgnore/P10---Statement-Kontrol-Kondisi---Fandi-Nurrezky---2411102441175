<html>
<head>
<title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
<h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>
<hr>

<?php

$bilangan1 = $_POST['bil1']; // membaca input bilangan pertama
$bilangan2 = $_POST['bil2']; // membaca input bilangan kedua
$bilangan3 = $_POST['bil3']; // membaca input bilangan ketiga

// Cara ke-1
// Idenya adalah mencari bilangan terbesar dari bil 1 dan bil 2, misalkan dinamakan maxSementara.
// Selanjutnya, mencari bilangan terbesar dari 3 bilangan: maxSementara dan bil 3.

if ($bilangan1 > $bilangan2)
    $maxSementara = $bilangan1;
else
    $maxSementara = $bilangan2;

if ($bilangan3 > $maxSementara)
    $maxAkhir = $bilangan3;
else
    $maxAkhir = $maxSementara;

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

// Cara ke-2
// Idenya adalah langsung membandingkan masing-masing bilangan dengan bilangan yang lain
// Bil 1 > Bil 2 && Bil 1 > Bil 3, maka Bil 1 max
if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3))
    $maxAkhir = $bilangan1;
else
    if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3))
    $maxAkhir = $bilangan2;
else
    if (($bilangan3 > $bilangan1) && ($bilangan3 > $bilangan2))
    $maxAkhir = $bilangan3;

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

// Cara ke-3
// Idenya hampir sama dengan cara ke-1 tapi lebih efisien dengan mencari max sementara

if ($bilangan1 > $bilangan2)
{
    if ($bilangan1 > $bilangan3)
        $maxAkhir = $bilangan1;
else
    $maxAkhir = $bilangan3;
}
else
    {
        if ($bilangan2 > $bilangan3)
            $maxAkhir = $bilangan2;
        else
            $maxAkhir = $bilangan3;
    }

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";
?>
</body>
</html>
