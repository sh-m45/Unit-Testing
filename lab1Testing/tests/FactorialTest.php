<?php

use App\test;
use PHPUnit\Framework\TestCase ; 


class FactorialTest extends TestCase
{
    public function testTrue(){
        $checkout = new test();
        $value = $checkout -> Factorial(5) ;
        // $this->assertTrue($value);
        $this->assertEquals(120, $value, "120 is supposed to be");
    }

    public function testZero() {
        $resultZero = new test();
        $value = $resultZero->Factorial(0) === 1 ? true : false;
        $this->assertTrue($value);
    }

    public function testOne() {
        $resultOne = new test();
        $value  = $resultOne->Factorial(1) === 1 ? true : false ;
        $this->assertTrue($value);
    }

    public function testNegative() {
        $resultNegative = new test();
        $value = $resultNegative->Factorial(-3) === null ? true : false ;
        $this->assertTrue($value);
    }

    public function testDivision() {
        $resultDivision = new test();
        $value = $resultDivision->Factorial(1.5) === null ? true : false ;
        $this->assertTrue($value);
    }

    public function testBool(){
        $resultBool = new test();
        $value = $resultBool->Factorial(false) === null ? true : false ;
        $this->assertTrue($value);
        // $value = $resultBool->Factorial(false) ;
        //$this->assertEquals(null, $value, "is * null"); // second solution or 
    }

    public function testString() {
        $resultString = new test();
        $value = $resultString->Factorial('abc') === null ? true : false ;
        $this->assertTrue($value);
    }

    public function testCalc() {
        $resultCalc = new test();
        $ranndom=rand(4,20) ;
        $factNum = $ranndom-1 ;
        $value = $resultCalc->Factorial($ranndom) == ($resultCalc->Factorial($factNum)) * $ranndom ? true : false ;
        $this->assertTrue($value);
    }
}