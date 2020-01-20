<?php

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{

    public function testReturnsFullName()
    {
        $user = new User;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFulname());
    }

//    public function testFullNameIsEmptyByDefault()
//    {
//       $user = new User;
//
//       $user->first_name = '';
//       $user->surname='';
//
//       $this->assertEquals('', $user->getFullName());
//    }

    /**
     * @test
     */

    public function UserHasFirstName()
    {
        $user = new User;

        $user->first_name = 'Teresa';

        $this->assertEquals('Teresa', $user->first_name);
    }

    /**
     * @test
     */
    public function testTrueIsTrue()
    {

        $this->assertTrue(true);


    }


}


