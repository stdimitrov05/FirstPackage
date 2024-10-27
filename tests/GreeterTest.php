<?php

use PHPUnit\Framework\TestCase;
use Stdimitrov\FirstPackage\Greeter;


class GreeterTest extends TestCase
{
    public function testSayHello()
    {
        $greeter = new Greeter();
        $this->assertEquals('Hello, world!', $greeter->sayHello());
    }
}