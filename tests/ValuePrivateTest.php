<?php

use PHPUnit\Framework\TestCase;

class ValuePrivateTest extends TestCase
{
    protected $valuePrivate;

    public function assertPreConditions(): void
    {
        self::assertTrue(class_exists('ValuePrivate'));
    }

    public function setUp(): void
    {
        $this->valuePrivate = new ValuePrivate;
    }

    public function testArrayIsArray()
    {
        $reflector = new ReflectionClass(ValuePrivate::class);
        $method = $reflector->getMethod('getArray');
        $method->setAccessible(true);
        $result = $method->invoke($this->valuePrivate);

        self::assertIsArray($result);

        //self::assertTrue(is_array($this->valuePrivate->getArray()));
    }
}