<?php

use PHPUnit\Framework\TestCase;

class Queue2Test extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue2 = new Queue2;

        $this->assertEquals(0, $queue2->getCount());

        return $queue2;

    }

    /**
     * 
     * @depends testNewQueueIsEmpty
     * 
     * @param $queue2 Queue2
     */
    

    public function testAnItemIsAddedToTheQueue(Queue2 $queue2)
    {
        $queue2->push('green');

        $this->assertEquals(1, $queue2->getCount());


        return $queue2;
    }

    /**
     * 
     * @depends testAnItemIsAddedToTheQueue
     * 
     * @param $queue2 Queue2
     */

    public function testAnItemIsRemovedFromTheQueue(Queue2 $queue2)
    {
        $item = $queue2->pop();

        $this->assertEquals(0, $queue2->getCount());
    }

//    public function testExceptionThrownWhenAddingItemToAFullQueue()
//    {
//        $queue2 = new Queue2;
//
//        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){
//
//            $queue2->push($i);
//        }
//
//        $this->expectException(QueueException::class);
//
//        $queue2->push('wafer thin mint');
//    }


}