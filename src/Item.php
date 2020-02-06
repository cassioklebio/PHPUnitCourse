<?php

/**
 * Class Item
 *
 * An example item class
 */
class Item
{
    /**
     * Get the description
     * @return integer A random integer
     */
    public function getDescription()
    {
        return $this->getID() . $this->getToken();
    }

    /**
     * Get a random ID
     * @return integer The ID
     *
     */
    protected function getID()
    {
        return rand();
    }

    /**
     * @return string The Token
     */
    protected function getToken()
    {
        return uniqid();
    }
}