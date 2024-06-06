<?php

require_once("./Province.php");

class City extends Province{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city) { 
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }

}