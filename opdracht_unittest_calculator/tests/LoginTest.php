<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Login\User;


class LoginTest extends TestCase {

    public function testPassword(){
        $user = new User;

        $user->setPassword("joaquim");

        $this->assertTrue(password_verify("joaquim", $user->getPassword()));
    }

    public function testValidateUser(){
        $user = new User;
        
        $errors = $user->validateUser();
        
        $this->assertEquals("Please enter a valid username.", $errors[0]);
    }
}
