<?php
//Composer autoloading path according to /codeception directory
include realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor')
        . DIRECTORY_SEPARATOR . 'autoload.php';

//Start session (maybe needed for some tests)
$sessionStatus = session_status();
if ($sessionStatus != PHP_SESSION_ACTIVE && $sessionStatus != PHP_SESSION_DISABLED)
{
    session_start();
}

//Autoloader from /src
\Zver\Autoloader::register(
    realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR) . 'src'
);