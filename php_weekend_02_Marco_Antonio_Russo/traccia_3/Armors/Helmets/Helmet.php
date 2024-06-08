<?php


abstract class Helmet{
    protected $singleDefensePoints = 0; 
    public $helmetIMG;
    public function getDefensePoints(){
        return $this->singleDefensePoints;
    }

    public function getHelmetIMG(){
        return $this->helmetIMG;
    }
}

