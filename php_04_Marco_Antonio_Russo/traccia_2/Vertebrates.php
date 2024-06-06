<?php

class Vertebrate{
    public function __construct(){
        $this->stampSpec();
    }

    protected function stampSpec(){
        echo "Sono un animale VERTEBRATO" . (get_class($this) == "Vertebrate"?"\n\n":"\n");

    }
}