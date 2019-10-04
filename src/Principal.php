<?php

namespace Serosme\MyFirstPackageTest;

use Serosme\MyFirstPackageTest\Respuesta;

class Principal {

    public function __construct(){}

    public function getRespuesta()
    {
        return Respuesta::verdadero();
    }
}
