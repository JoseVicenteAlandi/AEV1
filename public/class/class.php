<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
</body>
</html>


<?php
    class Coches{
        public $marca;
        private $modelo;
        public function GetTipos(){
            echo $this->marca ."<br>";
        }

        public function GetTipos(){
            echo $this->modelo ."<br>";
        }
        
    }

    $c1 = new Coches();
    $c2 = new Coches();

    $c1->marca="Ford";
    $c2->marca="Renault";

    $c1->GetTipos();
    $c2->GetTipos();

    $c1->modelo="Fiesta";
    $c2->modelo="Capture";

    echo $c1->GetTipos();
    echo $c2->GetTipos();
    ?>