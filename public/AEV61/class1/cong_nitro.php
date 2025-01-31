<?php
require_once ("congelados.php");

class cong_nitro extends congelados{
    private $metodoCong;
    private $tiempoNitroSeg;

    function __construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen ,$metodo_Cong, $tiempo_Nitro_Seg){
        parent::__construct($caducidad, $lote, $fEnvasado, $pais_Origen, $temp_Mante_Recomen);
            $this->metodoCong = $metodo_Cong;
            $this->tiempoNitroSeg = $tiempo_Nitro_Seg;
    }
}


?>