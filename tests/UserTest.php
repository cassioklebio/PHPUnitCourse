<?php

use PHPUnit\Framework\TestCase;



class UserTest extends TestCase
{
    public function testReturnsFullname()
    {
                
        $user = new User;

        $user->first_name = "Teresa";

        $user->surname = 'Green';

        $this->assertEquals('Teresa Green', $user->getFullName());

    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->method('sendMessage')
                    ->willReturn(true);

        $user->setMailer(new Mailer);

        $user->email = 'dave@exemple.com';

        $this->assertTrue($user->notify("Hello"));
    }


}