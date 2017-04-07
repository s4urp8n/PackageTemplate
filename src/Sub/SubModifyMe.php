<?php

namespace Sub;

use Zver\Common;
use Zver\Package\Helper;

class SubModifyMe
{

    use Helper;

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
        return static::getPackagePath('/files/.gitkeep');
    }

    public static function gitTestKeep()
    {
        return static::getPackagePath('/tests/files/.gitkeep');
    }

}