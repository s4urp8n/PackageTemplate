<?php
class ModifyMeTest extends PHPUnit\Framework\TestCase
{
    
    public static function autoload()
    {
        $srcDirectory =
            realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src') . DIRECTORY_SEPARATOR;
        
        //PSR4 autoloader
        spl_autoload_register(
            function ($className) use ($srcDirectory)
            {
                
                $className = mb_eregi_replace('[\\\/]+', DIRECTORY_SEPARATOR, $className);
                $className = mb_eregi_replace('^' . preg_quote(DIRECTORY_SEPARATOR) . '+', '', $className);
                $className = mb_eregi_replace(preg_quote(DIRECTORY_SEPARATOR) . '+$', '', $className);
                $className .= '.php';
                
                if (file_exists($srcDirectory . $className))
                {
                    include_once($srcDirectory . $className);
                }
                
            }, false
        );
        
        //Functions
        $aliases = [
            'func',
            'functions',
            'Functions',
        ];
        
        $currentFile = '';
        foreach ($aliases as $alias)
        {
            $currentFile = $srcDirectory . $alias . '.php';
            if (file_exists($currentFile))
            {
                include_once($currentFile);
            }
        }
    }
    
    public static function setUpBeforeClass()
    {
        static::autoload();
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