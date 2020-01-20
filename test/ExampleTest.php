<?php

use PHPUnit\Framework\TestCase;



class ExampleTest extends TestCase
{
    public function testExmple(){
        $this->assertTrue(true);
    }

    public function testAddingTwoPlusTwoResultsInFour(){

        $this->assertEquals(4, 2+2);
    }

    public function testPositiveTestcaseForArrayHasKey()
    {
        // array to be tested
        $array  = array('geeks' => 'geeksForgeeks', );
        // assert function to test whether 'geeks' is a key of array
        $this->assertArrayHasKey('geeks', $array, "Array doesn't contains 'geeks' as key");
    }

    public function testCountingArray()
    {
        $array = ['cassio', 'maria','tereziana','carlos','anamaria','victor','gabriel',];

        $this->assertEquals(7,count($array));
    }

    public function testNotEmptyArray()
    {
        $array = ['cassio', 'maria','tereziana','carlos','anamaria','victor','gabriel',];

        $this->assertTrue(is_array($array));

        $this->assertNotEmpty($array);
    }

    public function testEmptyArray()
    {
        $array = [];

        $this->assertTrue(is_array($array));

        $this->assertEmpty($array);
    }

    public function testEqualsValue()
    {
        $array1 = ['cassio', 'maria','tereziana','carlos','anamaria','victor','gabriel',];

        $array = ['cassio', 'maria','tereziana','carlos','anamaria','victor','gabriel',];

        $this->assertEquals($array, $array1);

        $this->assertTrue(is_array($array));

        $this->assertTrue(is_array($array1));
    }




}
