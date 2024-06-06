<?php
require_once("./Region.php");
class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) { 
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}