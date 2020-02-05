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
        $multiplicacao = new Multiplicacao();
        $multiplicacao->setNum1(2);
        $multiplicacao->setNum2(4);

        self::assertEquals(8, $multiplicacao->multiplicacaoDeDoisNumero());

        $multiplicacao->setNum1(-1);
        $multiplicacao->setNum2(2);

        self::assertEquals(-2, $multiplicacao->multiplicacaoDeDoisNumero());

    }

    /**
     *
     * expectedException() \InvalidArgumentException
     * @expectedExceptionMessage Parametro nao informado
     *
     */
    public function testValidaSeValoresNaoForemPassados()
    {
        //$this->expectException(InvalidArgumentException::class);

        $multiplicacao = new Multiplicacao();
        $multiplicacao->setNum1(1);
        $multiplicacao->setNum2(1);
    }

    public function testValidaSeValoresNaoForemPassadosLancaException()
    {
        $this->expectException(InvalidArgumentException::class);

        $multiplicacao = new Multiplicacao();
        $multiplicacao->setNum1('');
        $multiplicacao->setNum2(' ');
    }



}