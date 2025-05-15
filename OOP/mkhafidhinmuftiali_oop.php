<?php

function luasPersegi($sisi)
{
    return $sisi * $sisi;
}
function kelilingPersegi($sisi)
{
    return $sisi * 4;
}
function volumeKubus($sisi)
{
    return $sisi * $sisi * $sisi;
}
function kelilingKubus($sisi)
{
    return 12 * $sisi;
}

function perhitungan($jenis, $param1)
{
    if ($jenis == "Luas Persegi ") {
        return luasPersegi($param1);
    } elseif ($jenis == "Keliling Persegi ") {
        return kelilingPersegi($param1);
    } elseif ($jenis == "Volume Kubus ") {
        return volumeKubus($param1);
    } elseif ($jenis == "Keliling Kubus ") {
        return kelilingKubus($param1);
    } else {
        return "Perhitungan tidak ada pada sistem! ";
    }
}

// Pilihan Perhitungan:
// 1. Luas Persegi
// 2. Keliling Persegi
// 3. Volume Kubus
// 4. Keliling Kubus
// Perhatikan besar kecil huruf agar tidak terjadi error

$jenis = "Keliling Kubus ";
$param1 = 4;
echo "Menghitung " . $jenis . "<br>";
echo "Sisi: " . $param1 . "<br>";
echo "Hasil: " . $jenis . " adalah " . perhitungan($jenis, $param1);
