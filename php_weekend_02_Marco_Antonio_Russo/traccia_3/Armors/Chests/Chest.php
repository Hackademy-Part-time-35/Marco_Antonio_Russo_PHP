<?php


abstract class Chest{
    protected $singleDefensePoints = 0; 
    protected $charge = 100;

    public function getDefensePoints(){
        return $this->singleDefensePoints;
    }

    public function getCharge(){
        return $this->charge;
    }
}