<?php


require_once("Chest.php");

class ChestModel1 extends Chest{
    // URL Images
    // public const CHEST_IMG = "../../assets/img/model1/chest.png";
    

    public function __construct(){
        $this->singleDefensePoints += 5; 
        $this->charge -= 20;
    }



}