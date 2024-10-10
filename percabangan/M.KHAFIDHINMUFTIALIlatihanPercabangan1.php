<?php
//Diketahui
$p = 8;
$l = 6;
$t = 5;

//Operasi Perhitungan
$volume = $p*$l*$t;
$luas = 2*($p*$l+$p*$t+$l*$t);

//Operasi yang dilakukan
$menghitung = $luas;

//percabangan
if($menghitung == $volume){
    echo "Mencari Volume Balok:<br>";
    echo "Volume balok dengan nilai P =" .$p;
    echo " L =" .$l;
    echo " T =" .$t;
    echo " adalah $volume cm^3";
}else{
    echo "Mencari Luas Balok:<br>";
    echo "Luas balok dengan nilai P =" .$p;
    echo "L =" .$l;
    echo " T =" .$t;
    echo " adalah $luas cm^2";
}

?>