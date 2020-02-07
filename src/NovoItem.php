<?php

/**
 * Class NovoItem
 */
class NovoItem
{
    /**
     * Get a random token
     * @return string The token
     */
    private function getToken()
    {
        return uniqid();
    }
}