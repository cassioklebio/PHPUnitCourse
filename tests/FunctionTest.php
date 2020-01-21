<?php

use PHPUnit\Framework\TestCase;


class FunctionTest extends TestCase
{
  

    public function testAddReturnsTheCorrectSum()
    {
        require 'functions.php';

        $this->assertEquals(4, add(2,2));

        $this->assertEquals(8, add(3,5));


        $this->assertNotEquals(10, add(4,5));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));

    }

    public function testAddReturnsTheCorrectSubtraction()
    {
        $this->assertEquals(0, addsub(2,2));
    }

    public function testAddReturnsTheCorrectMultiplication()
    {
        $this->assertEquals(8, addmult(2,4));
    }

    public function testAddReturnsTheCorrectDivision()
    {
        $this->assertEquals(1, adddiv(2,2));
    }

    
   
}
