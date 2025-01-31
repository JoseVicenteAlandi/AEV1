<?php
class Triangle {
    private $Ladoa;
    private $Ladob;
    private $Ladoc;

    public function setLados($Ladoa, $Ladob, $Ladoc) {
        $this->Ladoa = $Ladoa;
        $this->Ladob = $Ladob;
        $this->Ladoc = $Ladoc;
    }

    public function getSemiperimetro() {
        return ($this->Ladoa + $this->Ladob + $this->Ladoc) / 2;
    }

    public function getArea() {
        $semiperimetro = $this->getSemiperimetro();
        return sqrt($semiperimetro * ($semiperimetro - $this->Ladoa) * ($semiperimetro - $this->Ladob) * ($semiperimetro - $this->Ladoc));
    }
}


$triangulo = new Triangle();
$triangulo->setLados(3, 4, 5);


echo "El área del triángulo es: " . $triangulo->getArea();

?>