<?php
class productos{
    protected $fechaCaducidad;
    protected $numeroLote;


public function __construct($Caducidad, $Lote){
    $this->fechaCaducidad = $Caducidad;
    $this->numeroLote = $Lote;
}

}
?>