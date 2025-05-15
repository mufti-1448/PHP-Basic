<?php

class Mobil {
    public $merk;
    public $warna;
}

$mobilSaya = new Mobil();
$mobilSaya->merk = "Nissan";
$mobilSaya->warna = "Merah";

echo "Mobil saya adalah {$mobilSaya->merk}";
echo "<br>";
echo "Warna mobil saya adalah ".$mobilSaya->warna;

?>