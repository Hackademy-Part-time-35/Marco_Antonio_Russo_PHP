<?php

for($i = 1; $i <=100; $i++){
    if($i % 15 == 0){
        echo "HACKADEMY";
    }else if($i % 5 == 0){
        echo "JAVASCRIPT";
    }else if($i % 3 == 0){
        echo "PHP";
    }else{
        echo $i;
    }
    echo "\n";
}