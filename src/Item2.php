<?php

/**
 * Class Item2
 */
class Item2
{
    /**
     * @return string
     *
     */
    private function getToken()
    {
        return uniqid();
    }

    /**
     * @param string $prefix
     * @return string
     */
    private function getPrefixedToken(string $prefix)
    {
        return uniqid($prefix);
    }
}