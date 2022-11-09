<?php

namespace Tests\Abstraccion;

use App\Abstraccion\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testCarHas4Wheels()
    {
        //GIVEN - ESCENARIO
        $car = new Car("blue");
        //WHEN - ACCIÓN
        $sut = $car->getWheels();
        //THEN - ASSERT
        $this->assertEquals(4,$sut);
    }

    public function testCarHasColor()
    {
        //GIVEN - ESCENARIO
        $car = new Car("red");
        //WHEN - ACCIÓN
        $sut = $car->getColor();
        //THEN - ASSERT
        $this->assertEquals("red",$sut);
    }

    public function testCarStartsVelocity0()
    {
        //GIVEN - ESCENARIO
        $car = new Car("red");
        //WHEN - ACCIÓN
        $sut = $car->getVelocity();
        //THEN - ASSERT
        $this->assertEquals(0,$sut);
    }

    public function testCarWhenAccelerateVelocityIncreaseInNumber()
    {
        //GIVEN - ESCENARIO
        $car = new Car("red");
        //WHEN - ACCIÓN
        $car->accelerate(5);
        $sut = $car->getVelocity();
        //THEN - ASSERT
        $this->assertEquals(5,$sut);
    }

}
