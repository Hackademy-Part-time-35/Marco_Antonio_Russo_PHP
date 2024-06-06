<?php

require_once("./City.php");

class Street extends City{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) { 
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation() {
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}