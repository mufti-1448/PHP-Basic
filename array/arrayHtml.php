<?php

// $car_brand = array("Toyota", "Honda", "Nissan", "Mitsubishi");
$car_merk = array("Corolla Altis", "Fortuner", "Velos","C-HR", "Yaris");
$car_tipe = array("Sedan", "SUV", "MPV", "Cross Over", "Hatchback");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varian Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Varian Mobil</h1>
    <table border="1px" >
        <tr>
            <th>No.</th>
            <th>Merek Mobil</th>
            <th>Tipe Mobil</th>   
        </tr>
        <?php foreach($car_merk as $m => $value) : ?>
            <!-- cara 1 -->
            <!-- <tr>
                <td><?= $m+1 ?></td>
                <td><?= $value ?></td>
                <td><?= $car_tipe[$m] ?></td>
            </tr> -->
            <!-- cara 2 -->
            <tr>
                <td><?php echo $m+1; ?></td>
                <td><?php echo $value; ?></td>
                <td><?php echo $car_tipe[$m]; ?></td>
            </tr>
        <?php  endforeach ?>
    </table>
</body>
</html>