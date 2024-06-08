<?php

require_once("Leg.php");

class LegModel1 extends Leg{
    // ULT Images
    public const LEFT_LEG = "../../assets/img/model1/Left_Leg.png";
    public const RIGHT_LEG = "../../assets/img/model1/Right_Leg.png";

    
    public function __construct(){
        $this->singleDefensePoints += 5; 
        $this->speed += 10;
    }
}