<?php

use PHPUnit\Framework\TestCase;
use App\ArrDiff;

class DiffTest extends TestCase{

    private $ad;

    public function setUp():void{
        $this->ad = new ArrDiff();
    }

    public function testDiff(){
        $this->assertEquals([2], $this->ad::arrDiff([1,2], [1]));
        $this->assertEquals([2,2], $this->ad::arrDiff([1,2,2], [1]));
        $this->assertEquals([1], $this->ad::arrDiff([1,2,2], [2]));
        $this->assertEquals([1], $this->ad::arrDiff([1,2,2], [2]));
        $this->assertEquals([1,2,2], $this->ad::arrDiff([1,2,2], []));
        $this->assertEquals([], $this->ad::arrDiff([], [1,2]));
        $this->assertEquals([3], $this->ad::arrDiff([1,2,3], [1, 2]));

        #OK (1 test, 7 assertions)
    }

} 