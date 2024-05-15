<?php

namespace Simple\Greeter;

class Greeter
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
