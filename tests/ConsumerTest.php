<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
$consumer->setNombre('Fernanda');
$consumer->setApellido('Dzib');
$result = $consumer->nombreCompleto();
$this->assertEquals('Fernanda Dzib', $result);
    }
}
