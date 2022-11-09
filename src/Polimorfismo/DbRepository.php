<?php

namespace App\Polimorfismo;

class DbRepository implements StudentRepository
{

    function save(): string
    {
        return 'el estudiante de ha guardado en la database';
    }
}