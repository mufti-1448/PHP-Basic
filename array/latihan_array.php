<?php

//inisialisasi data
$citys = array("Pekalongan", "Batang", "Kendal", "Brebes", "Pemalang");
//menambahkan data
array_push($citys, "Tegal", "Cirebon", "Semarang");
//menghapus data
unset($citys[2]);
//mengurutkan data secara manual dengan numeric
$city_list = array(
    "Semarang" => 1,
    "Batang" => 2,
    "Pekalongan" => 3,
    "Pemalang" => 4,
    "Tegal" => 5,
    "Brebes" => 6,
    "Cirebon" => 7
);
//fungsi pengurutan dengan numeric 
usort($citys, function($a, $b) use ($city_list) {
    return $city_list[$a] - $city_list[$b];
});
//pencetakan variabel
foreach($citys as $a){
    echo " $a, ";
}

?>


