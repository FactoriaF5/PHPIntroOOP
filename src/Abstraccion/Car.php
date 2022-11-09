<?php
namespace App\Abstraccion;

class Car extends Vehicle {


    public function __construct(string $color)
    {
        Parent::__construct($color);
        $this->wheels = 4;
    }

    public function accelerate(int $increase): void
    {
        $this->velocity += $increase;
    }
}