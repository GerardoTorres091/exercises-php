<?php

use PHPUnit\Framework\TestCase;
use App\PersistentBugger;

class PersistenseTest extends TestCase{

    private $pb;

    public function testMultiPersistence(){

        //al usar una funcion recursiva en mi diseño, decidí usar una implementacion de instanciar en lugar de 
        //static por lo que debo instanciar la clase antes de ejecutar el programa

        $this->pb = new PersistentBugger;
        $this->assertEquals(3, $this->pb->getMultiPersistence(39));
        $this->pb = new PersistentBugger;
        $this->assertEquals(0, $this->pb->getMultiPersistence(4));
        $this->pb = new PersistentBugger;
        $this->assertEquals(2, $this->pb->getMultiPersistence(25));
        $this->pb = new PersistentBugger;
        $this->assertEquals(4, $this->pb->getMultiPersistence(999));

        #OK (1 test, 4 assertions)
    }
    
}