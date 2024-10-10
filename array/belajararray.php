<?php

$data = array(
    "Nama" => "Mahatma Gandhi",
    "Negara" => "India",
    "Usia" => 70,
    // "lahir" => "28-10-1869"
);

$data["Usia"] = 100; //mengganti value

// metode biasa
// array_push($data, 
//     "Laki-laki", 
//     "28-10-1869",
// ); //menambahkan data

//metode 1
// $data += array(
//     "Kelamin" => "Laki-laki",
//     "Lahir" => "28-10-1869"
// );

//metode 2
$data2 = array(
    "Kelamin" => "Laki-laki",
    "Lahir" => "28-10-1869"
);
$hasil = array_merge($data, $data2); //pada percetakan nama variebel yang di cetak adalah $hasil

//metode 3
// $data = array_merge($data, array(
//     "Kelamin" => "Laki-laki", 
//     "Lahir" => "28-10-1869"
// ));

//mencetak forech biasa
// foreach($data as $a){
//     echo " $a <br>";
// }

// Mencetak array:

//var_dump($data_);

//print_r($data);

// foreach($data as $a => $v){ //mencetak variabel $data
//     echo " $a : $v <br>";
// }

foreach($hasil as $a => $v){    //mencetak variabel $hasil
    echo " $a : $v <br>";
}






?>