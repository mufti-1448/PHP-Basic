<?php

// buat 1 function yang meretrun nilai dari parameter yang dipangkatkan
// 2 ^ 3 => 2*2*2
// * dan ** => * perkalian, ** perpangkatan
// pow(angka, pangkat) -> pangkat
// sqrt(81) -> akar

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// function pangkat($angka) {
//     return $angka * $angka;
// }

// echo pangkat(2) . "<br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// function pangkat($angka, $pangkat) {
//     return $angka ** $pangkat;
// }

// echo pangkat(2, 3);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// buat function menghitung diskon dari parameter berdassarkan function total pembayaran
// output ada 2 total bayar dan total diskon

// // Fungsi menghitung total bayar setelah diskon
// function hitungTotalBayar($total) {
//     $diskon = hitungDiskon($total);
//     return $total - $diskon;
// }


// // Fungsi menghitung diskon
// function hitungDiskon($total){
//     if ($total >= 500000) {
//        return 0.2 * $total;
//     } elseif ($total >= 300000) {
//         return 0.1 * $total;
//     } elseif ($total >= 100000) {
//         return 0.05 * $total;
//     } else {
//         return 0;
//     }
// }

// // Input
// $total = 350000;
// $diskon = hitungDiskon($total);
// $totalBayar = hitungTotalBayar($total);

// // Output
// echo "Total: Rp $total<br>";
// echo "Diskon: Rp $diskon<br>";
// echo "Total Bayar: Rp $totalBayar";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Function Total Bayar
function totalBayar($harga, $jumlah) {
    return $harga * $jumlah;
}

function hitungDiskon($diskon) {
    $total = totalBayar(5000, 2);
    echo $total . "<br>";
    return $total * $diskon / 100;
}

// echo totalBayar(5000, 2) . "<br>";
echo hitungDiskon(10);

?>