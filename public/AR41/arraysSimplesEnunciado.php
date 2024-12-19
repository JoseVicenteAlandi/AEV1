<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php

        echo "ENCONTRAR UN NÚMERO<br>";
        //Ejemplo uni-dimensional indexado
        //Array donde se muestran los números de la lotería de Navidad.
        //Encuentra un número en el array mediante un bucle for.
        $numeros = [12345, 67890, 54321, 98765]; //array de números
        $numero = 54321; //número a buscar
        for ($i=0;$i < count ($numeros); $i++){
        }   if ($numeros [$i]=$numero)
            echo "el numero es: " . $numero;
        
        echo "<br>ENCONTRAR UN NÚMERO<br>";
        //Ejemplo uni-dimensional indexado
        //Array donde se muestran los números de la lotería de Navidad.
        //Encuentra un número en el array mediante un bucle foreach.
        $numeros = [12345, 67890, 54321, 98765]; //array de números
        $numero = 54321; //número a buscar
        foreach ($numeros as $value){
        }   if ($value = $numero)
        echo "el numero es: " . $numero;

        echo "<br>PROFESOR ENROLLADO<br>";
        //Ejemplo uni-dimensional indexado
        //Array donde se muestran las notas de los alumnos de clase.
        //El examen ha ido fatal y el profesor ha decidido aumentar un punto a cada alumno.
        $notas = [5, 6, 7, 8, 9]; //array de notas
        for ($i=0;$i < count ($notas); $i++){

        $notas[$i]=+1;
        }   

        echo "<br>MINUTOS POR PARTIDO<br>";
        //Ejemplo uni-dimensional indexado
        //Array donde se muestran los minutos jugados por un jugador por partido.
        //Cada posición del array corresponde a un partido.
        //Saca los minutos totales, la media de minutos y cuántos partidos no ha jugado.
        $partidos = [0, 15, 30, 45]; //array de minutos jugados por partido
        $minutosTotales = 0;
        $partidosNoJugados = 0;
        for ($i=0;$i < count ($partidos); $i++){
            ($minutosTotales += $partidos[$i]);
            $media = $minutosTotales / 4;
            if ($partidos[$i] <=0) 
            $partidosNoJugados++;
        }
        echo "Ha jugado: " . $minutosTotales;
        echo "Ha jugado: " . $media;
        echo "No ha jugado: " . $partidosNoJugados;
       
      
        echo "<br>MARCAS POR AÑO DE SALTO DE LONGITUD<br>";
        //Ejemplo uni-dimensional asociativo.
        //Array donde se muestran las mejores marcas del año de un saltador de longitud.
        //Cada posición del array corresponde a una año.
        //Obtén el año donde hace la mejor marca, la marca de ese año. Saca también la media de todos los años
        $MejorMarca=0;
        $total=0;
        $mejoranyo=0;
        $anyos = ['2010'=>7.57, '2011'=>7.34, '2012'=>8.03, '2013'=>7.97]; //array de marcas por año
        foreach ($anyos as $anyo=>$marca){
            $total+=$marca;
            if ($MejorMarca < $marca){
                $MejorMarca = $marca;
                $mejoranyo = $anyo;
            }
        }
        echo "$mejoranyo <br> $MejorMarca <br>" . $total/count($anyos) . "media<br>";
      


        echo "<br>MINUTOS POR PARTIDO<br>";
        //Ejemplo bi-dimensional indexado
        //Array donde se muestran los minutos jugados por una jugadora por partido.  
        //Cada posición del array corresponde a un partido y a una jugadora.
        //Saca de cada jugadora los minutos totales, la media de minutos y cuántos partidos no ha jugado.
        $partidos = [ //array de minutos jugados por partido y jugadora
            [0, 15, 30, 45],
            [45, 23, 45, 2],
            [0, 42, 86, 70],
            [86, 90, 0, 0]
        ];
        $minutosTotales = [0, 0, 0, 0];
        $partidosNoJugados = [0, 0, 0, 0];
        $media = [0, 0, 0, 0];
        for ($i=0;$i<count($partidos);$i++){
            for ($j=0;$j<count($partidos[$i]);$j++){
                $minutosTotales[$i] += $partidos[$i][$j];
                if ($partidos[$i][$j] == 0){
                    $partidosNoJugados[$i]++;
                }
            }
            $mediaa[$i] = $minutosTotales[$i]/count($partidos[$i]);
        }
        var_dump($minutosTotales);
        var_dump($partidosNoJugados);
        var_dump($mediaa);

        echo "<br>NOTAS POR ASIGNATURAS<br>";
        //Ejemplo bi-dimensional asociativo.
        //Array donde se muestran las notas de varios alumnos y alumnas por asignatura.
        //Cada posición del array corresponde a una asignatura y a un alumno o alumna.
        //Saca de cada alumno o alumna la nota media y cuántas asignaturas ha suspendido.
        $notas = [ //array de notas por asignatura y alumno
            'Juan' => ['Matemáticas' => 5, 'Lengua' => 6, 'Inglés' => 7],
            'María' => ['Matemáticas' => 4, 'Lengua' => 5, 'Inglés' => 6],
            'Pedro' => ['Matemáticas' => 6, 'Lengua' => 7, 'Inglés' => 8]
        ];
        $media = [];
        $suspensos = [];
        $sumaNota=0;
        foreach ($notas as $nombre=>$asignaturas){
            foreach ($asignaturas as $asignatura=>$nota){
                $sumaNota+=$nota;
                if ($nota<5){
                    $suspensos[$nombre]++;
                }
            }
            $media[$nombre] = $sumaNota/count($asignaturas);
            $sumaNota = 0;
            $sumaSusp=0;
        }
        var_dump($media);
        var_dump($suspensos);
        

    ?>
</body>
</html>