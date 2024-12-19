<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST");{
     $num = [$_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]];

     echo ($num[0] + $num[1] + $num[2] + $num[3] + $num [4])/5;

     $tam = count($num);
     for ($i = 0; $i < $tam; $i++) {
        echo $num[$i] . "<br>"
        $suma = array_sum($num);
            $media=$suma/$tan;
     }
    echo "la media es: $media"
    }
     

    ?> 
</body>
</html>