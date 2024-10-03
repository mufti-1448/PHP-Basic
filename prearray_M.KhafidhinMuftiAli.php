<?php
//Data
$car_brand = array("Toyota", "Honda", "Nissan", "Mitsubishi");
$car_merk = array("Camry", "Civic", "Lancer", "Fortuner", "Pajero", "Navara", "Avanza", "Teana", "XPander", "Livina", "BRV", "CRV", "Odessy");
$car_jenis = array("Sedan", "SUV", "MPV");

echo "Soal No 1<br>";

sort($car_brand);

foreach($car_brand as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 2<br>";

rsort($car_merk);

foreach($car_merk as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 3<br>";
array_push($car_brand, "BMW", "Marcedes Benz");

foreach($car_brand as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 4<br>";
array_push($car_merk, "BMW i5", "S450", "BMW X4", "GLA 200 AMG");

foreach($car_merk as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 5<br>";
rsort($car_merk);

foreach($car_merk as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 6<br>";
unset($car_merk[4]);

foreach($car_merk as $a) {
    echo $a . ",\n";
}

echo "<br>Soal No 7<br>";
rsort($car_merk);

foreach($car_merk as $a) {
    echo $a . ",\n";
}

echo "<br> Soal No 8<br>";
//array multidimentional array yg di dlmnya ada array
$mobil = [
    [
        "merk_mobil" => "Camry",
        "pabrikan_mobil" => "Toyota",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "Avanza",
        "pabrikan_mobil" => "Toyota",
        "jenis_mobil" => "MPV"
    ],
    [
        "merk_mobil" => "Civic",
        "pabrikan_mobil" => "Honda",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "BRV",
        "pabrikan_mobil" => "Honda",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "CRV",
        "pabrikan_mobil" => "Honda",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "Lancer",
        "pabrikan_mobil" => "Nissan",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "Teana",
        "pabrikan_mobil" => "Nissan",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "Navara",
        "pabrikan_mobil" => "Nissan",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "Livina",
        "pabrikan_mobil" => "Nissan",
        "jenis_mobil" => "MPV"
    ], 
    [
        "merk_mobil" => "Fortuner",
        "pabrikan_mobil" => "Mitsubishi",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "Pajero",
        "pabrikan_mobil" => "Mitsubishi",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "XPander",
        "pabrikan_mobil" => "Mitsubishi",
        "jenis_mobil" => "MPV"
    ],
    [
        "merk_mobil" => "BMW i5",
        "pabrikan_mobil" => "BMW",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "BMW X4",
        "pabrikan_mobil" => "BMW",
        "jenis_mobil" => "SUV"
    ],
    [
        "merk_mobil" => "S450",
        "pabrikan_mobil" => "Mercedes-Benz",
        "jenis_mobil" => "Sedan"
    ],
    [
        "merk_mobil" => "GLA 200 AMG",
        "pabrikan_mobil" => "Mercedes-Benz",
        "jenis_mobil" => "SUV"
    ],
];

foreach ($mobil as $data) {
    echo "<br>Merk mobil : {$data["merk_mobil"]}<br> 
    Dikeluarkan oleh pabrikan : {$data["pabrikan_mobil"]} <br>
    Dengan jenis mobil adalah : {$data["jenis_mobil"]}<br>";
}


?>