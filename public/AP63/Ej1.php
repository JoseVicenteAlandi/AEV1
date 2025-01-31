<?php

class InstrumentosMusicales {
    protected $musicoAsociado;
    protected $notasReproducibles;

    public function __construct($musicoAsociado, $notasReproducibles) {
        $this->musicoAsociado = $musicoAsociado;
        $this->notasReproducibles = $notasReproducibles;
    }

    public function getMusicoAsociado() {
        return $this->musicoAsociado;
    }

    public function getNotasReproducibles() {
        return $this->notasReproducibles;
    }

    public function tocar() {
        return "<br>El instrumento está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Viento extends InstrumentosMusicales {
    protected $tipoViento;

    public function __construct($musicoAsociado, $notasReproducibles, $tipoViento) {
        parent::__construct($musicoAsociado, $notasReproducibles);
        $this->tipoViento = $tipoViento;
    }

    public function getTipoViento() {
        return $this->tipoViento;
    }

    public function tocar() {
        return "<br>El instrumento de viento ({$this->tipoViento}) está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Cuerda extends InstrumentosMusicales {
    protected $numeroCuerdas;

    public function __construct($musicoAsociado, $notasReproducibles, $numeroCuerdas) {
        parent::__construct($musicoAsociado, $notasReproducibles);
        $this->numeroCuerdas = $numeroCuerdas;
    }

    public function tocar() {
        return "<br>El instrumento de cuerda con {$this->numeroCuerdas} cuerdas está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Percusion extends InstrumentosMusicales {
    protected $batutas;

    public function __construct($musicoAsociado, $notasReproducibles, $batutas) {
        parent::__construct($musicoAsociado, $notasReproducibles);
        $this->batutas = $batutas;
    }

    public function tocar() {
        return "<br>El instrumento de percusión con {$this->batutas} batutas está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Saxofon extends Viento {
    public function tocar() {
        return "<br>El saxofón de viento {$this->tipoViento} está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Trompeta extends Viento {
    public function tocar() {
        return "<br>La trompeta de viento {$this->tipoViento} está siendo tocada por {$this->musicoAsociado}.<br>";
    }
}


class Guitarra extends Cuerda {
    public function tocar() {
        return "<br>La guitarra con {$this->numeroCuerdas} cuerdas está siendo tocada por {$this->musicoAsociado}.<br>";
    }
}


class Tambor extends Percusion {
    public function tocar() {
        return "<br>El tambor está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}

class Silofono extends Percusion {
    public function tocar() {
        return "<br>El xilófono está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


class Piano extends InstrumentosMusicales {
    protected $cantidadTeclas;

    public function __construct($musicoAsociado, $notasReproducibles, $cantidadTeclas) {
        parent::__construct($musicoAsociado, $notasReproducibles);
        $this->cantidadTeclas = $cantidadTeclas;
    }

    public function tocar() {
        return "<br>El piano con {$this->cantidadTeclas} teclas está siendo tocado por {$this->musicoAsociado}.<br>";
    }
}


$guitarra = new Guitarra("Carlos", 36, 6);
echo $guitarra->tocar() . PHP_EOL;

$tambor = new Tambor("Laura", 10, 1);
echo $tambor->tocar() . PHP_EOL;

$piano = new Piano("María", 88, 88);
echo $piano->tocar() . PHP_EOL;

$saxofon = new Saxofon("Luis", 20, "madera");
echo $saxofon->tocar() . PHP_EOL;

$trompeta = new Trompeta("Carles", 23, "metal");
echo $trompeta->tocar() . PHP_EOL;

$silofono = new Silofono("Diego", 18, 2);
echo $silofono->tocar() . PHP_EOL;

?>
