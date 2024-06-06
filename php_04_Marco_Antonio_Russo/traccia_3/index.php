<?php
class Car { 
    private $num_telaio; 

    protected function setNumTelaio($num_telaio){
        $this->num_telaio = $num_telaio;
    }

    protected function getNumTelaio(){
        return $this->num_telaio;
    }
}

class MyCar extends Car { 
    protected $license; 
    protected $name; 

    public function __construct($name, $license, $num_telaio) {
        $this->name = $name;
        $this->license = $license;
        $this->setNumTelaio($num_telaio);
    }

    public function printInfo(){
        echo "La mia macchina è $this->name, con targa $this->license e numero di telaio: {$this->getNumTelaio()}";
    }
} 

$myCar = new MyCar("VW GOLF","AB 123 CD", 1234);

$myCar->printInfo();

var_dump($myCar);
