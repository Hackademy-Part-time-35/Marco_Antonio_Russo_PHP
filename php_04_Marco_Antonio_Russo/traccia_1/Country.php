<?php

require_once "./Continent.php";

class Country extends Continent{
    public $nameCountry;

    public function __construct($continent, $country) { 
        parent::__construct($continent);
        $this->nameCountry = $country; 
    }
}
