<?php

use PHPUnit\Framework\TestCase;
use kaiju\MyAmazingProgram;

class MyAmazingProgramTest extends TestCase
{
    public function testDoesTheThing()
    {
        $program = new MyAmazingProgram();
        $this->assertTrue($program->do_the_thing());
    }

    public function testDoesntDoTheThing()
    {
        $program = new MyAmazingProgram();
        $this->assertFalse($program->dont_do_the_thing());
    }

}
