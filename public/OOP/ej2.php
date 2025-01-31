<?php
class Average {
    private $numeroA;
    private $numeroB;
    private $numeroC;

    public function setLados($numeroA, $numeroB, $numeroC) {
        $this->numeroA = $numeroA;
        $this->numeroB = $numeroB;
        $this->numeroC = $numeroC;
    }

    public function getSuma() {
        return ($this->numeroA + $this->numeroB + $this->numeroC);
    }

    public function getMedia() {
        $suma = $this->getSuma();
        return $suma / 3;
    }
}

$average = new Average();
$average->setLados(10, 20, 30);
echo "La suma es: " . $average->getSuma() . "<br>";
echo "La media es: " . $average->getMedia() . "<br>";

?>