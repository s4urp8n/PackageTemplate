<?php
/**
 * This is router of php built-in webserver
 */

include "c3.php";

if (!defined('MY_APP_STARTED'))
{
    define('MY_APP_STARTED', true);
}

$pages = scandir(__DIR__ . DIRECTORY_SEPARATOR . 'pages');

array_shift($pages);//.
array_shift($pages);//..

if ($_SERVER['REQUEST_URI'] == '/c3/report/clover')
{
    echo file_get_contents(
        __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp'
        . DIRECTORY_SEPARATOR . 'codecoverage.clover.xml'
    );
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/clear')
{
    echo file_get_contents(
        __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp'
        . DIRECTORY_SEPARATOR . 'codecoverage.clover.xml'
    );
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/html')
{
    echo file_get_contents(
        __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp'
        . DIRECTORY_SEPARATOR . 'codecoverage.tar'
    );
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/serialized')
{
    echo file_get_contents(
        __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp'
        . DIRECTORY_SEPARATOR . 'codecoverage.serialized'
    );
}
elseif (in_array($_SERVER['REQUEST_URI'], $pages))
{
    $page = mb_eregi_replace('/tests/pages/', '', $_SERVER['REQUEST_URI']);
    include $page;
}
else
{
    return false;
}
?>