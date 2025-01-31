<?php
require_once("deporte.php");

class basket extends deporte{
    private $canastas;
    private $posesion;

    function __construct($Puntos, $Faltas, $Pases, $Canastas, $Posesion){
    parent::__construct($Puntos, $Faltas, $Pases);
    $this->canastas = $Canastas;
    $this->posesion = $Posesion;
}

}


?>