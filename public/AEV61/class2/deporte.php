<?php
class deporte{
    protected $puntos;
    protected $faltas;
    protected $pases;


public function __construct($Puntos, $Faltas, $Pases){
    $this->puntos = $Puntos;
    $this->faltas = $Faltas;
    $this->pases = $Pases;
}

}


?>