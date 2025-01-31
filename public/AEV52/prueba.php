<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
    <form method="post">
        Fila inicio: <input type="number" name="fila_inicio" required style="width: 60px;"><br>
        Columna inicio: <input type="number" name="columna_inicio" required style="width: 60px;"><br>
        Fila fin: <input type="number" name="fila_fin" required style="width: 60px;"><br>
        Columna fin: <input type="number" name="columna_fin" required style="width: 60px;"><br>
        <input type="submit" value="Prueba">
    </form>
    </body>
</html>

    <?php
        $numeros = [1,2,3,4,5,6];
        $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
        /*usa esto si no los generas tú*/
        $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
        $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
        
        $_SESSION['tablero'] = $tablero;

        
        //FUNCIONES



        function generarTablero() {
            $tablero = [];
            $numeros = range(0, 35);
            shuffle($numeros);

            for ($i = 0; $i < 6; $i++) {
                $tablero[$i] = array_splice($numeros, 0, 6);
            }

            return $tablero;
        }

        function dibujarTablero($combinaciones, $tablero) {
            for ($i = 0; $i < 6; $i++) {
                for ($j = 0; $j < 6; $j++) {
                    echo $combinaciones[$tablero[$i][$j]][0] . " ";
                    echo $combinaciones[$tablero[$i][$j]][1] . " ";
                }
                echo "<br>";
            }
        }

        function tiradaValida($inicio, $fin, $tablero) {
            return $tablero[$inicio[0]][$inicio[1]] === $tablero[$fin[0]][$fin[1]];
        }

        function tiradaPermitida($inicio, $fin) {
            return $inicio[0] === $fin[0] || $inicio[1] === $fin[1];
        }

       
        if (!isset($_SESSION['tablero'])) {
            $_SESSION['tablero'] = generarTablero();
        }

        
        dibujarTablero($combinaciones, $_SESSION['tablero']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['fila_inicio'], $_POST['columna_inicio'], $_POST['fila_fin'], $_POST['columna_fin'])) {
                $filaInicio = $_POST['fila_inicio'] - 1;
                $columnaInicio = $_POST['columna_inicio'] - 1;
                $filaFin = $_POST['fila_fin'] - 1;
                $columnaFin = $_POST['columna_fin'] - 1;

                $inicio = [$filaInicio, $columnaInicio];
                $fin = [$filaFin, $columnaFin];

                if (tiradaPermitida($inicio, $fin)) {
                    if (tiradaValida($inicio, $fin, $_SESSION['tablero'])) {
                        echo "<div>TIRADA PERMITIDA</div>";
                    } else {
                        echo "<div>TIRADA NO PERMITIDA</div>";
                    }
                } else {
                    echo "<div>TIRADA NO PERMITIDA</div>";
                }
            }
        }
    ?>

