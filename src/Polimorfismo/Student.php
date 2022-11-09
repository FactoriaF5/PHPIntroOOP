<?php

namespace App\Polimorfismo;

class Student
{

    private StudentRepository $repository;

    public function __construct($repositorio)
    {
        $this->repository =$repositorio;
    }

    public function save(): string {

            return $this->repository->save();
    }
}