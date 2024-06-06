<?php

include ("./Mammals.php");
include ("./Birds.php");
include ("./Fish.php");
include ("./Reptiles.php");
include ("./Amphibians.php");

$vertebrato = new Vertebrate;

$warm = new WarmBlooded;
$cold = new ColdBlooded;

$mammifero = new Mammal;
$uccello = new Bird;
$pesce = new Fish;
$rettile = new Reptile;
$anfibio = new Amphibian;