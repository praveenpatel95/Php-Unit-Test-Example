<?php
namespace tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testadd(){
        $calculator = new Calculator();
        $result = $calculator->add(3, 5);
        $this->assertEquals(8, $result);
    }

    public function test_substract(){
        $calculator = new Calculator();
        $result = $calculator->substract(5, 3);
        $this->assertEquals(2, $result);
    }
}