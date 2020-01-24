<?php

use PHPUnit\Framework\TestCase;


class Order2Test extends TestCase
{
    public function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub

        Mockery::close();
    }

    public function testOerderIsProcessedUsingAMock()
    {
        $order = new Order2(3, 1.99);

        $this->assertEquals(5.97, $order->amount);

        $gateway_mock = Mockery::mock('PaymentGateway');

        $gateway_mock->shouldReceive('charge')
                     ->once()
                     ->with(5.97);

        $order->process($gateway_mock);
    }

    public function testOrderIsProcessedUsingASpy()
    {
        $order = new Order2(3, 1.99);

        $this->assertEquals(5.97, $order->amount);

        $gateway_spy = Mockery::spy('PaymentGateway');

        $order->process($gateway_spy);

        $gateway_spy->shouldHaveReceived('charge')
                    ->once()
                    ->with(5.97);
    }


}