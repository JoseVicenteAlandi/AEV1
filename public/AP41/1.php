<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST");{
     $num = [$_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]];

     echo ;

     $tam = count($num);
     for ($i = 0; $i < $tam; $i++) {
        echo $num[$i] . "<br>"
        $suma = array_sum($num);
            $media=$suma/$tan;
     }
    echo "la media es: $media"
    }
     

    ?> 

     <form method="POST" action="">
        <label for="num1">NUMERO 1:</label>
        <input type="number" id="num1" name="num1" value="">
        <label for="num2">NUMERO 2:</label>
        <input type="number" id="num2" name="num2" value="">
        <label for="num3">NUMERO 3:</label>
        <input type="number" id="num3" name="num3" value="">
        <label for="num4">NUMERO 4:</label>
        <input type="number" id="num4" name="num4" value="">
        <label for="num5">NUMERO 5:</label>
        <input type="number" id="num5" name="num5" value="">
        <input type="submit" value="calcular">
    </form>
</body>
</html>