<?php

require_once("Arm.php");

class ArmModel1 extends Arm{

    // ULR Images
    public const LEFT_ARM = "../../assets/img/model1/Left_Arm.png";
    public const RIGHT_ARM = "../../assets/img/model1/Right_Arm.png";

    public function __construct(){
        $this->singleDefensePoints += 5; 
        $this->attackValue += 10;
    }

    
}