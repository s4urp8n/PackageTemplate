<?php
//Turn on implicit flush
ob_implicit_flush(true);

//Change shell directory to current
chdir(__DIR__);

include "functions.php";

return [
    'server'               => "127.0.0.1:4444",
    'packageName'          => "package",
    'codeceptionPath'      => __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'codeception'
                              . DIRECTORY_SEPARATOR . 'codeception' . DIRECTORY_SEPARATOR . 'codecept',
    'codeceptionArguments' => '--skip functional',
];