<?php

// for($i=0; $i <= 50; $i++) {
//     if($i % 5 == 0) {
//         echo $i . ". Ali <br>";
//     }else{
//         // echo $i . ".😎😎😎<br>";
//     }
// }

// for($i=0; $i <=50; $i+=5){
//     echo $i . ".😎<br>";
// }

// 1-25, apabila bisa di bagi 3 smk, dibagi 6 ket sa, dibg 3 6 smksa

// for($i=1; $i <=25; $i++){
//     if($i % 3 == 0 && $i % 6 == 0){
//         echo $i . ". SMK SA <br>";
//     }elseif($i % 6 == 0) {
//         echo $i .". SA<br>";
//     }elseif($i % 3 == 0) {
//         echo $i .". SMK<br>";
//     }else{ 
//         echo $i .".<br>";
//     }
// }

// Ronda malam senin
// Pos 2
// Pos 4
// Pos 6
// Pos 8
// Pos 10
// Ronda malam selasa
// Pos 1
// Pos 3
// Pos 5
// Pos 7
// Pos 9
// Ronda malam rabu
// Pos 12
// Pos 14
// Pos 16
// Pos 18
// Pos 20
// Ronda malam kamis
// Pos 11
// Pos 13
// Pos 15
// Pos 17
// Pos 19
echo "Ronda malam senin<br>";
for($i=1; $i<=10; $i++){
    if($i % 2==0){
        echo "pos. $i <br>";
    }
}

echo "Ronda malam selasa<br>";
for($a=1; $a <=9; $a++){
    if($a % 2!=0){
        echo "pos. $a <br>";
    }
}

echo "Ronda malam rabu<br>";
for($b=10; $b <=20; $b++){
    if($b % 2==0){
        echo "pos. $b <br>";
    }
}

echo "Ronda malam kamis<br>";
for($c=11; /*=nilai awa*/ $c <=19;/*=nilai akhir*/ $c++/*=increment*/){
    if($c % 2!=0){
        echo "pos. $c <br>";
    }
}

?>