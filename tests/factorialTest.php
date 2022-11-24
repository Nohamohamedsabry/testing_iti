<?php
require './src/Factorial.php';
use PHPUnit\Framework\TestCase;
class FactorialTest extends  TestCase{
    public function factorial()
    {
        $fact=new Factorial();
        $this->assertEquals(1, $fact->factorialCalc(0));
        $this->assertEquals(1, $fact->factorialCalc(1));
        $this->assertEquals(120, $fact->factorialCalc(5));   
        $this->assertEquals(null,$fact->factorialCalc(-3));
        $this->assertEquals(null,$fact->factorialCalc(1.5));
        $this->assertEquals(null,$fact->factorialCalc(false));
        $this->assertEquals(null,$fact->factorialCalc('abc'));   
    }
}
?>