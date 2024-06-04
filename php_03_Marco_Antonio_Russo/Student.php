<?php

class Student{
    public $name;
    public $surname;
    public $scores = [];
    public $average;

    public function __construct(string $name,string $surname,array $scores = [],float $average = NULL){
        $this->name = $name;
        $this->surname = $surname;
        $this->scores = $scores;
        $this->average = $average;
        $this->getAverage();
    }

    public function pushScore(float ...$score){
        foreach($score as $singleScore){
            $this->scores[] = $singleScore;

        }
        $this->getAverage();
    }

    public function getAverage(){
        if(count($this->scores)){
            $this->average = array_reduce($this->scores, function($carry, $score){
                return $carry += $score;
            })/count($this->scores);
        }
    }
}