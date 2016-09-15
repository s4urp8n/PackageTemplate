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
        $this->assertSame(ModifyMe3::method1(), 1);
        
    }
    
    public function testMethod2()
    {
        $this->assertSame(ModifyMe::method2(), 2);
        $this->assertSame(ModifyMe3::method2(), 2);
    }
    
    public function testPackageFile()
    {
        $this->assertSame(
            file_get_contents(packageFile('.gitkeep')), "Save files for your packages in this folder"
        );
        
        $this->assertSame(
            file_get_contents(packageTestFile('.gitkeep')), "Save files for your tests in this folder"
        );
    }
    
}