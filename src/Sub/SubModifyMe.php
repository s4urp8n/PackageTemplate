<?php
namespace Sub;

use Zver\Common;

class SubModifyMe
{

    public static function method1($arg1 = 0, $arg2 = null)
    {
        return 1;
    }

    public static function method2()
    {
        return 2;
    }

    public static function gitKeep()
    {
        return Common::getPackageFilePath('.gitkeep');
    }

    public static function gitTestKeep()
    {
        return Common::getPackageTestFilePath('.gitkeep');
    }

}