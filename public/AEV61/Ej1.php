<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1</title>
</head>
<body>
<?php
require_once ("./class1/productos.php");
require_once ("./class1/congelados.php");
require_once ("./class1/frescos.php");
require_once ("./class1/refrigerados.php");
require_once ("./class1/cong_agua.php");
require_once ("./class1/cong_aire.php");
require_once ("./class1/cong_nitro.php");

$pollo = new frescos("30-12-2025", "12345", "2025-01-15", "España");
var_dump($pollo);

$verduras = new cong_aire("2026-02-15", "33445", "2025-04-01", "España", "-20", "35");
var_dump($verduras);

$cordero = new cong_nitro("2026-03-20", "55667", "2025-05-01", "España", "-22", "2seg", "60");
var_dump($cordero);

$pescado = new cong_agua("2026-02-15", "33445", "2025-04-01", "España", "-20", "35");
var_dump($pescado);

$helado = new refrigerados("2025-11-20", "67890", "COD-5678", "2025-02-01", "4", "España");
var_dump($helado);
?>


</body>
</html>