<?php

/**
 * set up the known state of the tests using setUp and tearDown
 */

use PHPUnit\Framework\TestCase;

class QueueTest3 extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    protected function tearDown(): void
    {
        unset($this->queue);
    }

    public function testNewQueueIsEmpty()
    {        
        $this->assertEquals(0, $this->queue->getCount());
    }

    
    

    public function testAnItemIsAddedToTheQueue()
    {
        $this->queue->push('green');

        $this->assertEquals(1, $this->queue->getCount());        
    }

    
    public function testAnItemIsRemovedFromTheQueue()
    {
        $this->queue->push('green');

        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('green', $item);
    }
}