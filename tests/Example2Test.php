<?php

use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class Example2Test extends MockeryTestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }

}