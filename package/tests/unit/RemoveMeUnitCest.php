<?php

class RemoveMeUnitCest
{
    
    public function youCanRemoveThisTest1(UnitTester $I)
    {
        /**
         * Test autoloading from /tests/classes
         */
        
        $autoloaded = new Demo\DemoRemoveMe1();
        $autoloaded = new Demo\DemoRemoveMe2();
        $autoloaded = new DemoRemoveMe();
        
        $I->assertSame(RemoveMe::method1(), 1);
    }
    
    public function youCanRemoveThisTest2(UnitTester $I)
    {
        $I->assertSame(RemoveMe::method2(), 2);
    }
    
}