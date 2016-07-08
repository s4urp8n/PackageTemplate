<?php

class RemoveMeAcceptanceCest
{

    public function youCanRemoveThisTest1(AcceptanceTester $I)
    {
        $I->amOnPage('http://127.0.0.1:4444/page1.php');
        $I->seeResponseCodeIs(200);
        $I->see('Page1');
    }
    
    public function youCanRemoveThisTest2(AcceptanceTester $I)
    {
        $I->amOnPage('http://127.0.0.1:4444/page2.php');
        $I->seeResponseCodeIs(200);
        $I->see('Page2');
    }
}