<?php


abstract class Leg{
    protected $singleDefensePoints = 0; 

    protected $speed = 5;

    public function getDefensePoints(){
        return $this->singleDefensePoints;
    }

    public function getSpeed(){
        return $this->speed;
    }
}