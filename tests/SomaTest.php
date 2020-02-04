<?php

use \PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    protected $soma;

    public function setUp(): void
    {
        $this->soma = new Soma;
    }

    public function testSoma()
    {
        $this->soma->setNum1(10);
        $this->soma->setNum2(20);

        $response = $this->soma->soma();

        self::assertEquals(30, $response);
    }

    public function testGetNum1()
    {
        $this->soma->setNum1(10);

        $response = $this->soma->getNum1();

        self::assertEquals(10, $this->soma->getNum1());
    }

    public function testGetNum2()
    {
        $this->soma->setNum2(20);

        $response = $this->soma->getNum2();

        self::assertEquals(20, $response);
    }

}