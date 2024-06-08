<?php

require_once("Leg.php");

class LegModel2 extends Leg{
    // ULT Images
    public const LEFT_LEG = "../../assets/img/model2/Left_Leg.png";
    public const RIGHT_LEG = "../../assets/img/model2/Right_Leg.png";

    
    public function __construct(){
        $this->singleDefensePoints += 10; 
        $this->speed += 15;
    }
}