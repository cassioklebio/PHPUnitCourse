<?php

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testAddReturnsTheCorrectString()
    {
        require 'string.php';

        $this->assertEquals('Hello word', add('Hello','word'));
        $this->assertEquals('Cassio Klebio' , add('Cassio','Klebio'));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));
    }


}