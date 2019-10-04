<?php

namespace Serosme\PackageTest;

use Serosme\PackageTest\Respuesta;

class Principal {

    public function __construct(){}

    public function getRespuesta()
    {
        return Respuesta::verdadero();
    }
}
