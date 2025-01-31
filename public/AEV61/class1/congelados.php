<?php
require_once("productos.php");

class congelados extends productos{
    private $fechaEnvasado;
    private $paisOrigen;
    private $tempManteRecomen;


function __construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen){
    parent::__construct($caducidad, $lote);
        $this->fechaEnvasado = $fEnvasado;
        $this->paisOrigen = $pais_Origen;
        $this->temperaturaMantenimiento = $temp_Mante_Recomen;
}


}


?>