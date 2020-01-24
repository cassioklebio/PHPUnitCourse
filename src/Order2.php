<?php

/**
 * Class Order2
 *
 */
class Order2
{
    /**
     * Quantity
     * @var int
     */
    public $quantity;

    /**
     * Unit price
     * @var float
     */
    public $unit_price;

    /**
     * Total amount
     * @var float
     */
    public $amount;

    /**
     * Order2 constructor.
     * @param int $quantity
     * @param float $unit_price
     */
    public function __construct( int $quantity, float $unit_price)
    {
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;

        $this->amount = $quantity * $unit_price;
    }

    /**
     * Charge the total amount
     *
     * @param PaymentGateway $gateway Payment gateway object
     *
     * @return void
     */
    public function process(PaymentGateway $gateway)
    {
        $gateway->charge($this->amount);
    }


}