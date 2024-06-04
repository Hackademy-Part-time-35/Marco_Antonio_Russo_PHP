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
        $this->getAverage();    // aggiorna la proprietà average nel caso sia stato costruito un oggetto con degli scores
    }

    public function pushScore(float ...$score){ // metodo che riceve un numero di dati non definito che trasforma in un array e lo pusha dentro la proprietà scores
        foreach($score as $singleScore){
            $this->scores[] = $singleScore;

        }
        $this->getAverage();    // aggiorna la proprietà average al momento dell'inserimento di ogni nuovo score
    }

    public function getAverage(){   // metodo che controlla se la proprietà scores è vuota, altrimenti inserisce il valore della media fra i vari elementi di scores dentro la proprietà average
        if(count($this->scores)){
            $this->average = array_reduce($this->scores, function($carry, $score){
                return $carry += $score;
            })/count($this->scores);
        }
    }
}