<?php

class Mobil {
    public $merk;
    public $warna;

    public function jalan(){
        echo "Mobil sedang berjalan";
    }

}

$mobilSaya = new Mobil();
$mobilSaya->merk = "Nissan";
$mobilSaya->warna = "Merah";

echo "Mobil saya adalah {$mobilSaya->merk}";
echo "<br>";
echo "Warna mobil saya adalah ".$mobilSaya->warna;
echo "<br>";
echo $mobilSaya->jalan();

?>