<?php

require_once("./Cold-Blooded.php");
class Reptile extends ColdBlooded{
    public function __construct(){
        parent::__construct();
    }

    protected function stampSpec(){
        echo parent::stampSpec() . "Sono un RETTILE\n\n";

    }
}