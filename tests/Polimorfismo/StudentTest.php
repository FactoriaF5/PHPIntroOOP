<?php

namespace Tests\Polimorfismo;

use App\Polimorfismo\DbRepository;
use App\Polimorfismo\FileRepository;
use App\Polimorfismo\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function testsaveInDB()
    {
        $dbRepository = new DbRepository();
        $student = new Student($dbRepository);
        $sut = $student->save();
        $this->assertEquals('el estudiante de ha guardado en la database', $sut);
    }

    public function testsaveInFile()
    {
        $FileRepository = new FileRepository();
        $student = new Student($FileRepository);
        $sut = $student->save();
        $this->assertEquals('el estudiante de ha guardado en la archivo', $sut);
    }
}
