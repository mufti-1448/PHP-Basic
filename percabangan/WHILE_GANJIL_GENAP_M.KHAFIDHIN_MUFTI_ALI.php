<?php

//Modulus ganjil if ($na % 2 == 0), genap if ($na % 2 == 1) atau if ($na % 2 != 0)

$na = 1;
while($na <= 20) {
    if ($na % 2 == 1){
        echo $na. ". SMK<br>";
    }elseif ($na % 6 == 0){
        echo $na. ". SMKSA<br>";
    }else{
        echo $na. "<br>";
    }
    $na++;
    
}

?>