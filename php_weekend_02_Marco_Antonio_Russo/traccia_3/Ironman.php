<?php

class IronMan{
    public $model;
    public $armor;

    public static $instance;
    public $stats = [];
    public $componentStats = [];

    public function __construct(Armor $armor){
        $this->armor = $armor;
        $this->model = $armor->name;
        self::$instance++;
        $this->stats = $this->armor->getStats();
        $this->componentStats = $this->componentsStats();
    }

    public function attack($target){
        $this->armor->attack($target);
    }
    public function powerUp(int $chargePercentage){
        $this->armor->powerUp($chargePercentage);
    }
    public function componentsStats(){
        $arrayStats = [
            "Helmet" => [
                "Defense Points" => $this->armor->helmet->getDefensePoints()
            ],
            "Arms" => [
                "Left Arm" => [
                    "Defense Points" => $this->armor->lArm->getDefensePoints(),
                    "Attack Points" => $this->armor->lArm->getAttackValue()
                ],
                "Right Arm" => [
                    "Defense Points" => $this->armor->rArm->getDefensePoints(),
                    "Attack Points" => $this->armor->rArm->getAttackValue()
                ]
                ],
            "Chest" => [
                "Defense Points" => $this->armor->chest->getDefensePoints(),
                "Charge" => $this->armor->chest->getCharge()
            ],
            "Legs" => [
                "Left Leg" => [
                    "Defense Points" => $this->armor->lLeg->getDefensePoints(),
                    "Speed" => $this->armor->lLeg->getSpeed()
                ],
                "Right Leg" => [
                    "Defense Points" => $this->armor->rLeg->getDefensePoints(),
                    "Speed" => $this->armor->rLeg->getSpeed()
                ]
            ],
        ];

        return $arrayStats;
    }
    

}