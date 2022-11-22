<?php

use PHPUnit\Framework\TestCase;
use App\ValidatePin;

class PinTest extends TestCase{

    private $vp;

    public function setUp():void{
        $this->vp = new ValidatePin();
    }

    public function testInvalidPin(){
        $this->assertEquals(false, $this->vp::isValidPin('1'));
        $this->assertEquals(false, $this->vp::isValidPin('12'));
        $this->assertEquals(false, $this->vp::isValidPin('123'));
        $this->assertEquals(false, $this->vp::isValidPin('12345'));
        $this->assertEquals(false, $this->vp::isValidPin('1234567'));
        $this->assertEquals(false, $this->vp::isValidPin('-1234'));
        $this->assertEquals(false, $this->vp::isValidPin('12345'));
        $this->assertEquals(false, $this->vp::isValidPin('1.234'));
        $this->assertEquals(false, $this->vp::isValidPin('0000000'));
        $this->assertEquals(false, $this->vp::isValidPin('a234'));
        $this->assertEquals(false, $this->vp::isValidPin('.234'));

        #OK (1 test, 11 assertions)
    }

    public function testValidPin(){
        $this->assertEquals(true, $this->vp::isValidPin('1234'));
        $this->assertEquals(true, $this->vp::isValidPin('0000'));
        $this->assertEquals(true, $this->vp::isValidPin('1111'));
        $this->assertEquals(true, $this->vp::isValidPin('123456'));
        $this->assertEquals(true, $this->vp::isValidPin('098765'));
        $this->assertEquals(true, $this->vp::isValidPin('000000'));
        $this->assertEquals(true, $this->vp::isValidPin('123456'));
        $this->assertEquals(true, $this->vp::isValidPin('090909'));

        #OK (1 test, 8 assertions)
    }

} 