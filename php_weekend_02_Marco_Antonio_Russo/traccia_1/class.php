<?php

abstract class Category{

    abstract function getMyCategory();
}

class Actuality extends Category{
    
    public function getMyCategory(){
        echo get_class($this) . "\n";
    }
}

class Sport extends Category{
    
    public function getMyCategory(){
        echo get_class($this) . "\n";
    }
}

class Gossip extends Category{
    
    public function getMyCategory(){
        echo get_class($this) . "\n";
    }
}

class History extends Category{
    
    public function getMyCategory(){
        echo get_class($this) . "\n";
    }
}

$myActuality = new Actuality();
$mySport = new Sport();
$myGossip = new Gossip();  
$myHistory = new History();

// $myActuality->getMyCategory();
// $mySport->getMyCategory();
// $myGossip->getMyCategory();
// $myHistory->getMyCategory();
