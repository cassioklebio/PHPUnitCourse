<?php

/**
 * teste TDD
 */
use \PHPUnit\Framework\TestCase;


class MultiplicacaoTest extends TestCase
{
    public function assertPreConditions():void
    {
        $this->assertTrue(class_exists('Multiplicacao'));
    }

    public function testMulplicacaoDeDoisNumero()
    {
        $multiplicacao = new Multiplicacao;
        $multiplicacao->setNum1(2);
        $multiplicacao->setNum2(4);

        self::assertEquals(8, $multiplicacao->multiplicacaoDeDoisNumero());

    }


}