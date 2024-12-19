<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    
    <?php
     
     $arrPrimos = [];
     $numPrimos = 10;
     $si = 0;
     $num = 15;
     $n = 0;

    while ($num<=$numPrimos){
     for ($i=1;$i<=$num;$i++){
        $resto = $num%$i;
        if ($resto == 0){
            $si++;
        }
    }   

    if ($si == 2){
        $arrPrimos[] = $num;
        $n++;
    }
    $num++;
    $si = 0;
    
    }

    var_dump($numPrimos)

     

    ?> 
</body>
</html>