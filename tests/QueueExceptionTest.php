<?php

use \PHPUnit\Framework\TestCase;

class QueueExceptionTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){

            $this->queue->push($i);
        }

        $this->assertEquals(Queue::MAX_ITEMS, $this->queue->getCount());
    }

    public function testExceptionThownWhenAddingAnItemToAFullQueue()
    {
        for($i = 0; $i < Queue::MAX_ITEMS; $i++){

            $this->queue->push($i);
        }

        $this->expectException(QueueException::class);

        $this->expectExceptionMessage('Queue is full');

        $this->queue->push("wafer thin mint");
    }


}