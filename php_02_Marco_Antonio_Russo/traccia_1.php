<?php

$array = [
    ["nome" => "Marco", "cognome" => "Russo", "gender" => "male"],
    ["nome" => "Luigi", "cognome" => "Rossi", "gender" => "male"],
    ["nome" => "Maria", "cognome" => "Verdi", "gender" => "female"],
    ["nome" => "Miriam", "cognome" => "Bianchi", "gender" => "female"],
    ["nome" => "Francesco", "cognome" => "Legozzi", "gender" => "male"],
    ["nome" => "Andrea", "cognome" => "Beggins", "gender" => ""],
    ["nome" => "Carmelo", "cognome" => "Jager", "gender" => "male"]
];

foreach ($array as $person) {
    if($person["gender"] === "male"){
        echo "Buongiorno Sig. {$person["nome"]} {$person["cognome"]}\n";
    }else if($person["gender"] === "female"){
        echo "Buongiorno Sig.ra {$person["nome"]} {$person["cognome"]}\n";
    }else{
        echo "Buongiorno {$person["nome"]} {$person["cognome"]}\n";

    }
}