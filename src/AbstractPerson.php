<?php

/**
 * Class AbstractPerson
 * An examplo abstract person class
 *
 */
abstract class AbstractPerson
{
    /**
     * Surname
     * @var string
     */
    protected $surname;

    /**
     * Constructor
     *
     * AbstractPerson constructor.
     * @param $surname
     *
     * @return void
     */
    public function __construct($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get the person's title
     * @return string
     */
    abstract protected function getTitle();


    public function getNameAndTitle()
    {
        return $this->getTitle(). ' '.$this->surname;
    }
}