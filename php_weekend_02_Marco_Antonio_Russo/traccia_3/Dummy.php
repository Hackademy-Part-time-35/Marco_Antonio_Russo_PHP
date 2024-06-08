<?php

class Dummy{
    public $name;
    public $totalDefensePoints;
    public $totalAttackPoints;

    public function __construct(string $name = "Dummy", int $totalDefensePoints = 100, int $totalAttackPoints = 10)
    {   $this->name = $name;
        $this->totalAttackPoints = $totalAttackPoints;
        $this->totalDefensePoints = $totalDefensePoints;
    }

    public function attack($target){
        $target->totalDefensePoints -= $this->totalAttackPoints;
        echo "Hai colpito $target->name procurandogli un danno di $this->totalAttackPoints, gli restano $target->totalDefensePoints PS!\n";
    }
    
}