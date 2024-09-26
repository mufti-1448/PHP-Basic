<?php
//Suhu yang diketahui
$celcius = 25;
$fahrenheit = 77;

//Variabel untuk memilih jenis perhitungan
$perhitungan = 'fahrenheitToReamur'; 

//Rumus 
$celciusToFahrenheit = ($celcius * 9/5) + 32;
$fahrenheitToCelcius = ($fahrenheit - 32) * 5/9;
$fahrenheitToReamur = $fahrenheitToCelcius * 4/5;

//Perhitungan
echo "Konversi Suhu:<br>";

if ($perhitungan == 'celciusToFahrenheit') {
    echo "Suhu awal $celcius °C menjadi $celciusToFahrenheit °F<br>";
} elseif ($perhitungan == 'fahrenheitToReamur') {
    echo "Pertama, konversi $fahrenheit °F ke Celcius: $fahrenheitToCelcius °C<br>";
    echo "Kemudian, konversi $fahrenheitToCelcius °C ke Reamur: $fahrenheitToReamur °Re<br>";
} else {
    echo "Error: Jenis perhitungan tidak ada.<br>";
}
?>
