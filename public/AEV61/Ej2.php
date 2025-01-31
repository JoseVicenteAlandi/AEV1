<?php
require_once("./class2/deporte.php");
require_once("./class2/basket.php");
require_once("./class2/futbol.php");
require_once("./class2/rugby.php");

$deporte = [1, 2, 3, 1, 2];

foreach ($deporte as $deporte) { 
    if ($deporte == 1) { 
        $deporte = new basket("65", "4", "234", "25", "equipo morado");
    } 
    
    elseif ($deporte == 2) { 
        $deporte = new futbol("4", "7", "140", "4", "equipo rojo");
    } 
    
    elseif ($deporte == 3) { 
        $deporte = new rugby("36", "15", "120", "3", "equipo naranja");
    }

    var_dump($deporte);
}

?>