<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$testResult = null;

$webServerRoot = __DIR__ . DIRECTORY_SEPARATOR . 'pages';
$webServerRouter = __DIR__ . DIRECTORY_SEPARATOR . 'router.php';
$webServerCommand = 'php -S ' . $config['server'] . ' -t "' . $webServerRoot . '" "' . $webServerRouter . '"';

$webServerProcess = proc_open(
    $webServerCommand, [
    ["pipe", "r"],
    ["pipe", "w"],
    ["pipe", "w"],
], $pipesWebServer
);

echo "Webserver loading...";
while (!is_resource($webServerProcess))
{
    echo ".";
}
echo "\n";

$commands = [
    [
        'description' => 'Package testing started...',
    ],
    [
        'callback' => function () use ($config)
        {
            chdir(__DIR__);
        },
    ],
    [
        'callback' => function () use ($config)
        {
            $removes = [
                'codeception',
            ];
            
            foreach ($removes as $remove)
            {
                PackageTemplate\removePath($remove);
            }
        },
    ],
    [
        'callback' => function () use ($config)
        {
            @mkdir('codeception');
        },
    ],
    [
        'callback' => function () use ($config)
        {
            chdir('codeception');
        },
    ],
    [
        'command' => 'php "' . $config['codeceptionPath'] . '" bootstrap',
    ],
    [
        'callback' => function () use ($config)
        {
            chdir(__DIR__);
        },
    ],
    [
        'description' => 'Replace testing files...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\copyDirectory('tests', 'codeception' . DIRECTORY_SEPARATOR . 'tests');
            PackageTemplate\copyDirectory('src', 'codeception' . DIRECTORY_SEPARATOR . 'src');
            copy('.codeception.yml', 'codeception' . DIRECTORY_SEPARATOR . 'codeception.yml');
            unlink('codeception' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . '_bootstrap.php');
            rename(
                'codeception' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'bootstrap.php',
                'codeception' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . '_bootstrap.php'
            );
        },
    ],
    [
        'callback' => function () use ($config, &$testResult)
        {
            chdir('codeception');
        },
    ],
    [
        'description' => 'Clean testing files...',
        'command'     => 'php "' . $config['codeceptionPath'] . '" clean',
    ],
    [
        'description' => 'Clean testing files...',
        'command'     => 'php "' . $config['codeceptionPath'] . '" build',
    ],
    [
        'description' => 'Testing...',
        'callback'    => function () use ($config, &$testResult)
        {
            $testCommand = 'php "' . $config['codeceptionPath'] . '" run ' . $config['codeceptionArguments'];
            passthru($testCommand, $testResult);
        },
    ],
];

//Executing commands and show output
try
{
    PackageTemplate\executeCommands($commands);
}
catch (Exception $e)
{
    
}

$pstatus = proc_get_status($webServerProcess);
$pid = $pstatus['pid'];

PackageTemplate\kill($pid);

exit($testResult);
