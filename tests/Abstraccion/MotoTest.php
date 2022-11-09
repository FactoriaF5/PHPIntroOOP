<?php

namespace Tests\Abstraccion;

use App\Abstraccion\Car;
use App\Abstraccion\Moto;
use PHPUnit\Framework\TestCase;

class MotoTest extends TestCase
{
    public function testHas2Wheels()
    {
        $moto = new Moto("green");

        $sut = $moto->getWheels();

        $this->assertEquals(2, $sut);
    }

    public function testCarWhenAccelerateVelocityIncreaseInNumber()
    {
        //GIVEN - ESCENARIO
        $moto = new Moto("red");
        //WHEN - ACCIÓN
        $moto->accelerate(5);
        $sut = $moto->getVelocity();
        //THEN - ASSERT
        $this->assertEquals(10, $sut);
    }

}
