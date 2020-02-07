<?php

use PHPUnit\Framework\TestCase;

class StringPrivateTest extends TestCase
{
    protected $stringPrivate;

    public function assertPreConditions(): void
    {
        self::assertTrue(class_exists('StringPrivate'));
    }

    public function setUp(): void
    {
        $this->stringPrivate = new StringPrivate;
    }

    public function testStringIsString()
    {
        $reflector = new ReflectionClass(StringPrivate::class);
        $method = $reflector->getMethod('getString');
        $method->setAccessible(true);
        $result = $method->invoke($this->stringPrivate);
        self::assertIsString($result);

        //self::assertTrue($this->stringPrivate->getString());
    }



}