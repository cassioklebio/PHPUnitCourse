<?php

use PHPUnit\Framework\TestCase;


class NovoItemTest extends TestCase
{
    protected  $item;

    public function assertPreConditions(): void
    {
        self::assertTrue(class_exists('NovoItem'));
    }

    public function setUp(): void
    {
        $this->novoItem = new NovoItem;
    }


    public function testTokenIsAString()
    {
        $reflector = new ReflectionClass(NovoItem::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);
        $result = $method->invoke($this->novoItem);
        self::assertIsString($result);
    }

}