<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    protected $item;

    public function assertPreConditions():void
    {
        $this->assertTrue(class_exists('Item'));
    }

    public function setUp(): void
    {
        $this->item = new ItemChild;
    }

    public function testDescriptionIsNotEmpty()
    {
        self::assertNotEmpty($this->item->getDescription());
    }

    /**
     *
     * Testing non-public methods
     *
     */
    public function testIDisAnInteger()
    {
        self::assertIsInt($this->item->getID());
    }

    public function testTokenIsAString()
    {
        self::assertIsString($this->item->getToken());
    }
}