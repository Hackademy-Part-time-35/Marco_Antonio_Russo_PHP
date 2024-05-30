<?php

$temperature = [
    "Venezia" => 16, 
    "Bari" => 32,
    "Roma" => 28, 
    "Napoli" => 30,
    "Milano" => 4, 
    "Palermo" => 14,
    "Torino" => 24, 
    "Roccaraso" => -5000,
    "Lecce" => 27, 
    "Genova" => 30,
    "Catania" => 11, 
    "Cosenza" => 9,
];

foreach ($temperature as $city => $celsius) {
    $temp;

    if($celsius > 25){
        $temp = "molto caldo";
    }else if($celsius >= 15){
        $temp = "caldo";
    }else if($celsius < 15){
        $temp = "freddo";
    }

    echo "A $city fa $temp con $celsius C°\n";
}