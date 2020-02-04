<?php

use \PHPUnit\Framework\TestCase;

class SubtracaoTest extends TestCase
{
    protected $subtracao;

    public function setUp(): void
    {
        $this->subtracao = new Subtracao;
    }
    public function testSubtracao()
    {
        $this->subtracao->setNum1(20);
        $this->subtracao->setNum2(10);

        $response = $this->subtracao->subtracao();

        self::assertEquals(10, $response);
    }
}