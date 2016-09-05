<?php

class ModifyMeTest extends PHPUnit\Framework\TestCase
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
        $this->assertSame(ModifyMe3::method1(), 1);
        $this->assertSame(removeMeFunction(), 1);
        $this->assertSame(\Sub\SubModifyMe::method1(), 1);
    }
    
    public function testMethod2()
    {
        $this->assertSame(ModifyMe::method2(), 2);
        $this->assertSame(ModifyMe3::method2(), 2);
        $this->assertSame(\Sub\SubModifyMe::method2(), 2);
    }
    
}