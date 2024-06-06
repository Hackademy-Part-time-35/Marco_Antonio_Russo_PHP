<?php

require_once("./Vertebrates.php");
class WarmBlooded extends Vertebrate{
    public function __construct(){
        parent::__construct();
    }

    protected function stampSpec(){
        echo parent::stampSpec() . "Sono un animale a SANGUE CALDO" . (get_class($this) == "WarmBlooded"?"\n\n":"\n");


    }
}