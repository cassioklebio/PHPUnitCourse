<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    protected $array;

    public function setUp(): void
    {
        $this->array = ['one', 'two', 'three', ];
    }

    public function testArrayInitiallyHasOneItem()
    {
        $array = ['one'];
        $this->assertNotEmpty($array);
        $this->assertNotEmpty($this->array);
        $this->assertNotEquals($array, $this->array);

    }

    public function testCanAddItemToArray()
    {
       $this->array[] = "Four";

        $this->assertEquals("Four", $this->array[3]);
        $this->assertCount(4, $this->array);
    }

    public function testArrayEqualswithArray1()
    {
        $array1 = ['one', 'two', 'three', ];

        $this->assertEquals($array1, $this->array);
    }
}