<?php


require_once("Chest.php");

class ChestModel2 extends Chest{
    // URL Images
    public const CHEST_IMG = "../../assets/img/model2/Chest.png";

    public function __construct(){
        $this->singleDefensePoints += 10; 
    }



}