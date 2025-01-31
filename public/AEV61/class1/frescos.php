<?php
require_once("productos.php");

class frescos extends productos{
    private $fechaEnvasado;
    private $paisOrigen;

    function __construct($caducidad, $lote, $fEnvasado, $pais_Origen){
        parent::__construct($caducidad, $lote);
            $this->fechaEnvasado = $fEnvasado;
            $this->paisOrigen = $pais_Origen;
    }
}

?>