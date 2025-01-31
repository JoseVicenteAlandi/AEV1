<?php
require_once("deporte.php");

class futbol extends deporte{
    private $goles;
    private $fueraDeJuego;

    function __construct($Puntos, $Faltas, $Pases, $Goles, $fuera_de_juego){
    parent::__construct($Puntos, $Faltas, $Pases);
    $this->goles = $Goles;
    $this->fueraDeJuego = $fuera_de_juego;
}

}
?>