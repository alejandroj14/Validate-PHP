<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends Testcase{
  
  public function test_email(){
    $email = Validate::email('alejandroj37@gmail.com');
    $this->assertTrue($email);

    $email = Validate::email('alejandroj37@gmailcom');
    $this->assertFalse($email);
  }

  public function test_url(){
    $url = Validate::url('https://platzi.com');
    $this->assertTrue($url);

    $url = Validate::url('platzi.com');
    $this->assertFalse($url);
  }

  public function test_password(){
    $password = Validate::password('J24939r!');
    $this->assertTrue($password);
  }

}