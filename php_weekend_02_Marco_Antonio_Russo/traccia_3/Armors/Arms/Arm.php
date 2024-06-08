<?php

abstract class Arm{
    protected $singleDefensePoints = 0;
    protected $attackValue;

    public function getDefensePoints(){
        return $this->singleDefensePoints;
    }

    public function getAttackValue(){
        return $this->attackValue;
    }
}