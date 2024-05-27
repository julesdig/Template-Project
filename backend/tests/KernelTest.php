<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class KernelTest extends KernelTestCase
{
    public function testKernel()
    {
        self::bootKernel();
        $kernel = self::$kernel;

        $this->assertInstanceOf(Kernel::class, $kernel);

    }
}