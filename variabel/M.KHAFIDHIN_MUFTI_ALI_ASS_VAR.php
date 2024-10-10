<?php

$alas = 2;
$tinggi = 4;
$tinggiPrisma = 10;
$setengah = 1/2;
$luasAlas = $setengah*$alas*$tinggi;
$volumePrisma = $luasAlas*$tinggiPrisma;

echo 'Sebuah prisma segitiga mempunyai alas dengan panjang sisi 2 cm dan tingginya 4 cm. Tinggi prisma tersebut adalah 10 cm. Berapakah volume dari prisma segitiga ini';
echo "Diketahui : alas 2cm, tinggi 4cm, tinggi prisma 10cm<br><br>";

echo "1. Mencari Luas Alas<br>";
echo "Luas alas = 1/2 x alas x tinggi<br>";
echo "Luas alas = 1/2 x 2 x 4<br>";
echo "Luas Alas = " .$luasAlas. "<br><br>";
echo "2. Mencari volume prisma<br>";
echo "Volume prisma = luas alas x tinggi prisma<br>";
echo "Volume prisma = " .$luasAlas. " x 10<br>";
echo "Volume Prisma = "  .$volumePrisma. "<br><br>";

echo "Jadi, luas alas prisma adalah $luasAlas cm^2<br>";
echo "Jadi, volume prisma adalah $volumePrisma cm^3<br>";

?>