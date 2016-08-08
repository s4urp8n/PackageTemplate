<?php

/**
 * Class RemoveMe
 * This is example of class documentation description of class
 */
class RemoveMe
{
    
    /**
     * This is example documentation of class method
     *
     * @example
     *
     * <code>
     *
     * $result=RemoveMe::method1();
     *
     * </code>
     *
     * @return int
     */
    public static function method1($arg1 = 0, $arg2 = null)
    {
        return 1;
    }
    
    /**
     * This is example documentation of class method2
     *
     * @example
     *
     * <code>
     *
     * $result=RemoveMe::method2();
     *
     * </code>
     *
     * @return int
     */
    public static function method2()
    {
        return 2;
    }
    
}

trait RemoveMeTrait
{
    
    public static $name = 'removeMeName';
}

interface RemovableMe
{
    
    public function getRemoveInfoFromME();
}