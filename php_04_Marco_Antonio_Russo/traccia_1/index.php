<?php

include_once("./Street.php");

$myLocation = new Street("Europa","Italia", "Puglia", "BA", "Bari", "Strada San Giorgio Martire 2D");

$myLocation->getMyCurrentLocation();