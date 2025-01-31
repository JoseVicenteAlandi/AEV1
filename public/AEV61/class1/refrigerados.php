<?php
require_once("productos.php");

class refrigerados extends productos{
    private $codOrgSuperAlimen;
    private $fechaEnvasado;
    private $tempManteRecomen;
    private $paisOrigen;

    function __construct($caducidad, $lote, $fEnvasado, $pais_Origen, $cod_Org_Super_Alimen, $temp_Mante_Recomen){
        parent::__construct($caducidad, $lote);
            $this->fechaEnvasado = $fEnvasado;
            $this->paisOrigen = $pais_Origen;
            $this->cod_Org_Super_Alimen = $cod_Org_Super_Alimen;
            $this->tempManteRecomen = $temp_Mante_Recomen;
    }
}

?>