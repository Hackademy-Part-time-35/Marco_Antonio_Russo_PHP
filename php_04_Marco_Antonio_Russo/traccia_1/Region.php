<?php

require_once("./Country.php");

class Region extends Country{
    public $nameRegion;

    public function __construct($continent, $country, $region) { 
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}