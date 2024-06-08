<?php

require_once("Helmet.php");
class HelmetModel1 extends Helmet{

    
    
    // Methods
    public function __construct(){
        $this->singleDefensePoints += 5; 
        // ULR Images
        $this->helmetIMG = "./assets/img/model1/helmet.png";
    }



    
}

