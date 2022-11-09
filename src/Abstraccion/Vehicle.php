<?php

namespace App\Abstraccion;

abstract class Vehicle
{
    protected int $wheels;
    protected int $velocity = 0;
    private string $color;

    /**
     * @param int $wheels
     */
    public function __construct(string $color)
    {
        $this->color = $color;

    }

    /**
     * @return void
     */
    public abstract function accelerate(int $increase): void;


    /**
     * @return int
     */
    public function getWheels(): int
    {
        return $this->wheels;
    }

    /**
     * @return int
     */
    public function getVelocity(): int
    {
        return $this->velocity;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

}