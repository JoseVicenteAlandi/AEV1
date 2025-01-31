<?php
require_once ("congelados.php");

class cong_agua extends congelados{
    private $salAguaCong;

    function __construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen ,$sal_Agua_Cong){
        parent::__construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen);
            $this->salAguaCong = $sal_Agua_Cong;
    }

    
}
?>