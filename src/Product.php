<?php

/**
 * Class Product
 *
 * An example product class
 */
class Product
{
    /**
     * Unique identifier
     * @var inteter
     */
    protected $product_id;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->product_id = rand();
    }
}