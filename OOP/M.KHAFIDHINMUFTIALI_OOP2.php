<?php
$nama = "Ali";
$gajiPokok = 5000000;
$tinggalLuarKota = true;
$jamLembur = 10;
$jumlahHariTidakMasuk = 2;

echo "Gaji Karyawan : " . $nama . "<br>";

hitungGajiBersih($gajiPokok, $tinggalLuarKota, $jamLembur, $jumlahHariTidakMasuk);

// Function Hitung Tunjangan Jabatan
function hitungTunjanganJabatan($gajiPokok) {
    $tunjangan = $gajiPokok * 10 / 100;
    echo "Tunjangan Jabatan : Rp " . $tunjangan . "<br>";
    return $tunjangan;
}

// Function Hitung Tunjangan Transportasi
function hitungTunjanganTransportasi($tinggalLuarKota) {
    $tunjangan = $tinggalLuarKota ? 500000 : 0;
    echo "Tunjangan Transportasi : Rp " . $tunjangan . "<br>";
    return $tunjangan;
}

// Function Hitung Lembur
function hitungLembur($jamLembur) {
    $lembur = 25000 * $jamLembur;
    echo "Lembur : Rp " . $lembur . "<br>";
    return $lembur;
}

// Function Hitung Potongan Absensi
function hitungPotonganAbsensi($jumlahHariTidakMasuk) {
    $potongan = 100000 * $jumlahHariTidakMasuk;
    echo "Potongan Absensi : Rp " . $potongan . "<br>";
    return $potongan;
}

// Function Hitung Pajak
function hitungPajak($totalPendapatan) {
    $pajak = $totalPendapatan * 5 / 100;
    echo "Pajak : Rp " . $pajak . "<br>";
    return $pajak;
}

// Function Hitung Gaji Bersih
function hitungGajiBersih($gajiPokok, $tinggalLuarKota, $jamLembur, $jumlahHariTidakMasuk) {
    echo "Gaji Pokok : Rp " . $gajiPokok . "<br>";
    
    $tunjanganJabatan = hitungTunjanganJabatan($gajiPokok);
    $tunjanganTransportasi = hitungTunjanganTransportasi($tinggalLuarKota);
    $lembur = hitungLembur($jamLembur);
    $potonganAbsensi = hitungPotonganAbsensi($jumlahHariTidakMasuk);

    $totalPendapatanSebelumPajak = $gajiPokok + $tunjanganJabatan + $tunjanganTransportasi + $lembur;
    $pajak = hitungPajak($totalPendapatanSebelumPajak);

    $gajiBersih = $totalPendapatanSebelumPajak - $pajak - $potonganAbsensi;
    echo "Gaji Bersih : Rp " . $gajiBersih . "<br>";
}
?>
