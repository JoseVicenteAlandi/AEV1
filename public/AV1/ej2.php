<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        $numero = $_POST=["numero"]

        if ($numero % 2) ==0 {
            echo "tu numero es: $numero"
            $numero / 2;
        } while ($numero > 1)
        
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>