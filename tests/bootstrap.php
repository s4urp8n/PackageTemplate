<?php

$srcDirectory = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src') . DIRECTORY_SEPARATOR;

$composerDirectory =
    realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor') . DIRECTORY_SEPARATOR;

//PSR4 autoloader
spl_autoload_register(
    function ($className) use ($srcDirectory)
    {
        
        $className = mb_eregi_replace('[\\\/]+', DIRECTORY_SEPARATOR, $className);
        $className = mb_eregi_replace('^' . preg_quote(DIRECTORY_SEPARATOR) . '+', '', $className);
        $className = mb_eregi_replace(preg_quote(DIRECTORY_SEPARATOR) . '+$', '', $className);
        $className .= '.php';
        
        if (file_exists($srcDirectory . $className))
        {
            include_once($srcDirectory . $className);
        }
        
    }, false
);

//Functions file autoload if exists
$aliases = [
    'Functions',
];

$currentFile = '';
foreach ($aliases as $alias)
{
    $currentFile = $srcDirectory . $alias . '.php';
    if (file_exists($currentFile))
    {
        include_once($currentFile);
    }
}

//Composer autoload
$currentFile = $composerDirectory . 'autoload.php';
if (file_exists($currentFile))
{
    include_once($currentFile);
}