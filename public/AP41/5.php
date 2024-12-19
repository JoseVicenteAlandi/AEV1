<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    
    <?php

    $empate = 0;
    $gana1 = 0;
    $gana2 = 0;
    $rondas = [];
     for ($i=0;$i<10;$i++){
        $j1 = rand(2,12);
        $j2 = rand(2,12);

        if ($j1>$j2){
            $rondas[$i] = 1;
        }
        elseif ($j1==$j2){
            $rondas[$i] = "X";  
            }
        else{
            $rondas[$i] = 2;
        }
    }
        for($i=0;$i<count($rondas);$i++){
            if ($rondas[$i] == 1){
                $gana1++;
            }
            elseif ($rondas[$i] == 2){
                $gana2++;
            }
            else{
                $empate++;
            }
        }

        echo "el 1 gana $gana1 veces<br>";
        echo "el 2 gana $gana2 veces<br>";
        echo "empatan $empate veces<br>";
     var_dump($rondas)
    ?> 
</body>
</html>