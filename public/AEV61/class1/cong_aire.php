<?php
require_once ("congelados.php");

class cong_aire extends congelados{
    private $composicionAire;

    function __construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen ,$composicion_Aire){
        parent::__construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen);
            $this->composicionAire = $composicion_Aire;
    }
}

?>