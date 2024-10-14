<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paquetes=0;
        $ancho=0;
        $alto=0;
        $largo=0;
        $peso=$_POST=["peso"];
        $sitio=$_POST=["sitio"];
        $tamaño=0;
        $transporte="aereo";
        $aumento2=0;
        $precio=0;
        $tamaño=$ancho*$alto*$largo;
        $aumento=0;
        $precio_total= ($precio + $aumento + $aumento2)*$paquetes;



        if ($tamaño <= 0.5){
        $tamaño * 50;}
        elseif ($tamaño <= 1){
        $tamaño * 75;}
        elseif ($tamaño > 1){
        $tamaño * 100;} 
    
    
        if ($peso < 5){
        $aumento= $precio * 1;
        }
        elseif ($peso >= 5){
        $aumento= $precio * 0.25;
        }
        elseif ($peso >= 10){
        $aumento = $precio * 0.50;
        }
        elseif ($peso > 15){
            echo "el paquete no se puede enviar debido a que pesa mas de 15 kilos";}
       
       
    
    if ($sitio="peninsula") {
        $precio*1;
    }
    elseif ($sitio="baleares_maritimo"){
        $aumento2 = $precio*1;
    }
    elseif ($sitio="baleares_ aereo"){
       $aumento2 = $precio*0.10;
    }
    elseif ($sitio="canarias") {
        $aumento2 = $precio*0.10;
    }
    
    
    echo "el precio de envio es: $precio_total";

    
}
    
    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamaño">ANCHO:</label>
        <input type="number" id="tamano" name="ancho" value="">
        <label for="tamaño">ALTO:</label>
        <input type="number" id="tamano" name="alto" value="">
        <label for="tamaño">LARGO:</label>
        <input type="number" id="tamano" name="largo" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="peso">ZONA:</label>
        <input id="sitio" name="sitio" value="">
        <input type="submit" value="Calcular">
       
    </form>
</body>
</html>