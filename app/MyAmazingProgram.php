<?php
namespace kaiju;

class MyAmazingProgram
{
    public function do_the_thing() {
        return true;
    }

    public function dont_do_the_thing() {
        return true; // this will break the build
    }
}
