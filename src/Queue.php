<?php

/**
 * 
 * 
 * Queue
 * 
 * A first-in, first-out data structure
 * 
 * 
 */

class Queue
{
    /**
     * Maximum number of items in the queue
     * @var integer
     *
     */
    const MAX_ITEMS = 5;


    /**
     * Queue items
     *
     * @var array
     *
     */

    protected $items = [];


    /**
     * Add an item to the end of the queue
     *
     * @param mixed $item the item
     *
     * @throws QueueException if the number of items on the queue exceeds
     * the MAX_ITEMS value
     *
     */

    public function push($item)
    {
        if($this->getCount() == static::MAX_ITEMS){
            throw new QueueException('Queue is full');
        }

        $this->items[] = $item;


    }


    /**
     * Take an item off the head of the queue
     *
     * @return mixed the item
     */
    public function pop()
    {
        //return array_pop($this->items);

        return array_shift($this->items);
    }


    /**
     * Get the total number of items in the queue
     */
    public function getCount()
    {
        return count($this->items);
    }

    public function clear()
    {
        $this->items = [];
    }


}