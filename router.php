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

$pages = array_map(
    function ($value)
    {
        return '/' . $value;
    }, $pages
);

$c3Directory = __DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp'
               . DIRECTORY_SEPARATOR;

if ($_SERVER['REQUEST_URI'] == '/c3/report/clover')
{
    echo file_get_contents($c3Directory . 'codecoverage.clover.xml');
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/clear')
{
    echo file_get_contents($c3Directory . 'codecoverage.clover.xml');
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/html')
{
    echo file_get_contents($c3Directory . 'codecoverage.tar');
}
elseif ($_SERVER['REQUEST_URI'] == '/c3/report/serialized')
{
    echo file_get_contents($c3Directory . 'codecoverage.serialized');
}
elseif (in_array($_SERVER['REQUEST_URI'], $pages))
{
    $page = mb_eregi_replace('/', '', $_SERVER['REQUEST_URI']);
    include __DIR__ . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $page;
}
else
{
    return false;
}
?>