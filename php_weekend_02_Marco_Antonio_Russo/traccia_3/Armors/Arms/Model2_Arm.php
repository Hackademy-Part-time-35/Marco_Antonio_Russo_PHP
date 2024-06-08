<?php

require_once("Arm.php");

class ArmModel2 extends Arm{

    // ULR Images
    public const LEFT_ARM = "../../assets/img/model2/Left_Arm.png";
    public const RIGHT_ARM = "../../assets/img/model2/Right_Arm.png";

    public function __construct(){
        $this->singleDefensePoints += 10; 
        $this->attackValue += 15;
    }
}