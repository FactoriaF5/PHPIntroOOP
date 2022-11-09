<?php

namespace App\Polimorfismo;

class FileRepository implements StudentRepository
{

    function save(): string
    {
        return 'el estudiante de ha guardado en la archivo';
    }
}