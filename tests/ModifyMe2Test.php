<?php

class ModifyMe2Test extends PHPUnit\Framework\TestCase
{
    
    public static function setUpBeforeClass()
    {
        
    }
    
    public static function tearDownAfterClass()
    {
        
    }
    
    public function testMethod1()
    {
        $this->assertSame(ModifyMe::method1(), 1);
    }
    
    public function testMethod2()
    {
        $this->assertSame(ModifyMe::method2(), 2);
    }
    
}