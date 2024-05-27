<?php

namespace App\Tests;

use App\DummyClass;
use PHPUnit\Framework\TestCase;

class DummyClassTest extends TestCase
{
    public function testAddNumbers()
    {
        $dummyClass = new DummyClass();
        $result = $dummyClass->addNumbers(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testMultiplyNumbers()
    {
        $dummyClass = new DummyClass();
        $result = $dummyClass->multiplyNumbers(2, 3);
        $this->assertEquals(6, $result);
    }
}