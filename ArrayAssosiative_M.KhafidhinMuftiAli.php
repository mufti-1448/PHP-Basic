<?php


$data_siswa = array(
    "No Absen" => 16,
    "NIS" => "23,6963",
    "Nama Lengkap" => "M. Khafidhin Mufti Ali",
    "Alamat Kota/Kabupaten" => "Kabupaten Pekalongan"
);

var_dump($data_siswa);
echo "<br><br>";
print_r($data_siswa);
echo "<br><br>";
foreach($data_siswa as $a => $v){
    echo " $a : $v <br>";
}

?>