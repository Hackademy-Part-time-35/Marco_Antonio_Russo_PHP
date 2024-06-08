<?php

require_once("Helmet.php");
class HelmetModel2 extends Helmet{

    // ULR Images
    public const HELMET_IMG = "../../assets/img/model2/Helmet.png";


    // Methods
    public function __construct(){
        $this->singleDefensePoints += 10; 
    }

    
}