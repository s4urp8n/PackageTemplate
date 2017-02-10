<?php

class ModifyMeTest extends PHPUnit\Framework\TestCase
{

    use \Zver\Package\Test;
    use \Zver\Package\Common;

    public static function setUpBeforeClass()
    {

    }

    public static function tearDownAfterClass()
    {

    }

    public function testMethod1()
    {
        $this->foreachSame(
            [
                [ModifyMe::method1(), 1],
                [ModifyMe3::method1(), 1],
                [removeMeFunction(), 1],
                [\Sub\SubModifyMe::method1(), 1],
            ]
        );
    }

    public function testMethod2()
    {
        $this->foreachSame(
            [
                [ModifyMe::method2(), 2],
                [ModifyMe3::method2(), 2],
                [\Sub\SubModifyMe::method2(), 2],
            ]
        );
    }

}