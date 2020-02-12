<?php

use PHPUnit\Framework\TestCase;

class Item2Test extends TestCase
{
    protected $item;


    public function setUp(): void
    {
        $this->item = new Item2;
    }

    public function testTokenIsAString()
    {
        $reflector = new ReflectionClass(Item2::class);
        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($this->item);

        self::assertIsString($result);

    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $reflector = new ReflectionClass(Item2::class);

        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($this->item, ['example']);

        self::assertStringStartsWith('example', $result);
    }
}