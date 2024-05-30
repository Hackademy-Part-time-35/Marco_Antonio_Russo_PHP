<?php

$array = [rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
$counter = 0;
$sum = 0;

foreach ($array as $value) {
    if($value % 2 == 0){
        $sum += $value;
        $counter++;
    }
}

echo $sum / $counter;