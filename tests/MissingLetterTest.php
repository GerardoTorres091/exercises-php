<?php

use PHPUnit\Framework\TestCase;
use App\FindMissingLetter;

class MissingLetterTest extends TestCase{

    private $ml;

    public function setUp():void{
        $this->ml = new FindMissingLetter();
    }

    public function testMissingLetter(){
        $this->assertEquals('e', $this->ml->findMissingLetter(['a','b','c','d','f']));

        #OK (1 test, 1 assertion)
    }

    public function testMayusLetter(){
        $this->assertEquals('p', $this->ml->findMissingLetter(['O','Q','R','S']));

        #OK (1 test, 1 assertion)
    }

} 