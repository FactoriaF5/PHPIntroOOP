<?php

namespace App\Abstraccion;

class Moto extends Vehicle
{


    public function __construct(string $color)
    {
        Parent::__construct($color);
        $this->wheels = 2;
    }

    public function accelerate(int $increase): void
    {
        $this->velocity += $increase * 2;
    }
}