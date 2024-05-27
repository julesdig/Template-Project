<?php

namespace App;

class DummyClass
{
    public function addNumbers(int $a, int $b): int
    {
        return $a + $b;
    }

    public function multiplyNumbers(int $a, int $b): int
    {
        return $a * $b;
    }
}