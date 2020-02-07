<?php

use PHPUnit\Framework\TestCase;

class IntegerPrivateTest extends TestCase
{
    protected $integerPrivate;

    public function assertPreConditions(): void
    {
       self::assertTrue(class_exists('IntegerPrivate'));
    }

    public function setUp(): void
    {
        $this->integerPrivate = new IntegerPrivate;
    }

    public function testIntegerIsInteger()
    {
        $reflector = new ReflectionClass(IntegerPrivate::class);
        $method = $reflector->getMethod('getInterger');
        $method->setAccessible(true);
        $result = $method->invoke($this->integerPrivate);
        //self::assertTrue($this->integerPrivate->getInterger());
    }


}