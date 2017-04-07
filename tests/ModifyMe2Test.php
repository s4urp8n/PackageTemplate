<?php

class ModifyMe2Test extends PHPUnit\Framework\TestCase
{

    use \Zver\Package\Helper;

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

    public function testPackageFileAndTestFile()
    {
        $gitKeep = 'Save files for your packages in this folder';
        $gitTestKeep = 'Save files for your tests in this folder';

        $this->assertSame(file_get_contents(static::getPackagePath('/files/.gitkeep')), $gitKeep);
        $this->assertSame(file_get_contents(\Sub\SubModifyMe::gitKeep('.gitkeep')), $gitKeep);
        $this->assertSame(file_get_contents(\ModifyMe::gitKeep('.gitkeep')), $gitKeep);
        $this->assertSame(file_get_contents(static::getPackagePath('/tests/files/.gitkeep')), $gitTestKeep);
        $this->assertSame(file_get_contents(\Sub\SubModifyMe::gitTestKeep('.gitkeep')), $gitTestKeep);
        $this->assertSame(file_get_contents(\ModifyMe::gitTestKeep('.gitkeep')), $gitTestKeep);
    }

}