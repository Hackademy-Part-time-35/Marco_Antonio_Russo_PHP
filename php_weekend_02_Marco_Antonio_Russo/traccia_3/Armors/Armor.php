<?php



class Armor{
    
    
    // Generic Info
    public $name;
    public static $Mk;
    // Objects
    public  $helmet;
    public  $rArm;
    public  $lArm;
    public  $chest;
    public  $rLeg;
    public  $lLeg;
    
    // Stats
    protected $totalDefensePoints = 0;
    protected $totalAttackPoints = 0;
    protected $poweredAttack;
    protected $charge;

    private $stats = [];


    public function __construct(Helmet $helmet,Arm $rArm,Arm $lArm, Chest $chest,Leg $rLeg,Leg $lLeg,string $name = "armor" ){
        
        if($name == "armor") {$this->name = "MK" . ++self::$Mk;}
        
        $this ->helmet = $helmet;
        $this ->rArm = $rArm;
        $this ->lArm = $lArm;
        $this ->rLeg = $rLeg;
        $this ->lLeg = $lLeg;
        $this ->chest = $chest;


        $this->totalDefensePoints += $helmet->getDefensePoints() + $rArm->getDefensePoints() + $lArm->getDefensePoints() + $rLeg->getDefensePoints() + $lLeg->getDefensePoints() + $chest->getDefensePoints();
        $this->totalAttackPoints +=$rArm->getAttackValue() + $lArm->getAttackValue();
        $this->charge = $chest->getCharge();
        $this->poweredAttack = $this->totalAttackPoints;
        $this->stats = [
            "Defense Points" => $this->totalDefensePoints,
            "Attack Points" => $this->totalAttackPoints,
            "Charge" => $this->charge
        ];
        
    }

    public function attack($target){
        $crit = "";
        if($target->totalDefensePoints > 0){
            if($this->checkCrit()) {
                $this->poweredAttack *= 2;
                $crit = "CRITICO! ";
            }
                
            $target->totalDefensePoints -= $this->poweredAttack;
            echo $crit . "Hai colpito $target->name procurandogli un danno di $this->poweredAttack, " . ($target->totalDefensePoints <= 0? "lo hai sconfitto!\n": "gli restano $target->totalDefensePoints PS!\n");
        }else{
            echo "$target->name è già stato sconfitto";
        }

        $this->poweredAttack = $this->totalAttackPoints;
        
    }

    public function powerUp(int $chargePercentage){

        $this->poweredAttack = $this->totalAttackPoints * ($chargePercentage*0.01 +1);
        $this->charge -= $chargePercentage;
    }

    public function checkCrit(){
        return rand(1,10) == 1;
    }
    

    public function getStats(){
        return $this->stats;
    }
}