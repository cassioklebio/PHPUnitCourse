<?php

use PHPUnit\Framework\TestCase;

class Mailer2Test extends TestCase
{
        public function testSendMessageReturnsTrue()
        {
            $this->assertTrue(Mailer2::send('cassio@examplo.com', 'Hello"'));
        }

        public function testInvalidArgumentExceptionIfEmailIsEmpty()
        {
            $this->expectException(InvalidArgumentException::class);

            Mailer2::send('','');
        }
}