<?php

$corsoHackademy = [
    "docenti" =>[
        "giuseppe",
        "andrea",
        "emanuele"
    ],

    "studenti" =>[
        "marco",
        "cristian",
        "giada",
        "adriatik"
    ],

    "argomenti" =>[
        "html",
        "css",
        "bootstrap",
        "javascript",
        "php",
        "laravel"
    ]
];



echo "Sono " . ucfirst($corsoHackademy["studenti"][0]) . " e sto studiando " . strtoupper($corsoHackademy["argomenti"][4]) . " con " . ucfirst($corsoHackademy["docenti"][2]); 
