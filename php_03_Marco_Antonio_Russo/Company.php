<?php

class Company {
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public $id;

    public static $counter = 0;
    public static $costPerYear = [];

    public function __construct(string $name,string $location,int $tot_employees, int $avg_salary) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;
        $this->id = self::$counter;
        self::$counter++;
        self::$costPerYear[] =$this->getCostPerMonth(12);
    }

    public function consoleStamp(){
    
        echo "L'ufficio $this->name con sede in $this->location" . ($this -> tot_employees != 0 ? " ha ben $this->tot_employees dipendenti" : " non ha dipendenti");
        echo "\n";
    }

    public function getCostPerMonth(int $months){
        return ($this->avg_salary * $this->tot_employees) * $months;
    }

    public function stampCost(int $months){
        $cost = $this->getCostPerMonth(($months));
        echo "Le spese dell'azienda $this->name per un numero di mesi pari a $months ammonta a $cost €\n";
    }
    
    public static function howManyCompanies(){
        echo "Sono state create " . self::$counter .  " aziende\n";
    }

    public static function printAllCosts(){

        $totalCost = array_reduce(self::$costPerYear,function($acc, $value){
            $acc += $value;
            return $acc;
        });
            
        
        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di $totalCost € all’anno\n";
    }

}