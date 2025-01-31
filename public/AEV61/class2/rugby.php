<?php
require_once("deporte.php");

class rugby extends deporte{
    private $ensayos;
    private $mele;

    function __construct($Puntos, $Faltas, $Pases, $Ensayos, $Mele){
    parent::__construct($Puntos, $Faltas, $Pases);
    $this->ensayos = $Ensayos;
    $this->mele = $Mele;
}

}

?>