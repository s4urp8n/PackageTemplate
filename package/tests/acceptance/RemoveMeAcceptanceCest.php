<?php

class RemoveMeAcceptanceCest
{
    
    protected $host = 'http://127.0.0.1:4444/';
    
    public function youCanRemoveThisTest1(AcceptanceTester $I)
    {
        $I->amOnPage($this->host . 'page1.php');
        $I->seeResponseCodeIs(200);
        $I->see('Page1');
    }
    
    public function youCanRemoveThisTest2(AcceptanceTester $I)
    {
        $I->amOnPage($this->host . 'page2.php');
        $I->seeResponseCodeIs(200);
        $I->see('Page2');
    }
}