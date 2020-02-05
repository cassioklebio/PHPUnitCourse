<?php

use \http\Exception\InvalidArgumentException;

class Multiplicacao
{
    private $num1;
    private $num2;

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1 = null)
    {
        if (!$num1){
            throw new \InvalidArgumentException("Parametro nao informado");
        }
        $this->num1 = $num1;
    }

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2 = null)
    {
        if (!$num2){
            throw new \InvalidArgumentException("Parametro nao informado");
        }
        $this->num2 = $num2;
    }

    public function multiplicacaoDeDoisNumero()
    {
        return $this->num1 * $this->num2;
    }
}