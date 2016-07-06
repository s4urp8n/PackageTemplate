<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$webServerRoot = __DIR__ . DIRECTORY_SEPARATOR . 'pages';
$webServerRouter = __DIR__ . DIRECTORY_SEPARATOR . 'router.php';
$webServerCommand = 'php -S ' . $config['server'] . ' -t "' . $webServerRoot . '" "' . $webServerRouter . '"';

$webServerProcess = new \Symfony\Component\Process\Process($webServerCommand);
$webServerProcess->start();

while (!$webServerProcess->isRunning())
{
    //Wait process running
    usleep(1000);
}

$commands = [
    [
        'description' => 'Package testing started...',
    ],
    [
        'description' => 'Cleaning...',
        'callback'    => function () use ($config)
        {
            $removes = [
                'codeception',
            ];

            foreach ($removes as $remove)
            {
                $config['removeFunction']($remove);
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
        'command' => 'php ' . $codeceptionPath . ' bootstrap codeception',
    ],
    [
        'callback' => function ()
        {
            chdir('codeception');
        },
    ],
    [
        'description' => 'Clean testing files...',
        'command'     => 'php ' . $codeceptionPath . ' clean',
    ],
    [
        'description' => 'Clean testing files...',
        'command'     => 'php ' . $codeceptionPath . ' build',
    ],
    [
        'callback' => function ()
        {
            chdir('..');
        },
    ],
    [
        'description' => 'Clean testing files...',
        'callback'    => function () use ($config)
        {
            copy('codeception.yml', 'codeception' . DIRECTORY_SEPARATOR . 'codeception.yml');
            packageTemplateCopyDirectory('tests', 'codeception' . DIRECTORY_SEPARATOR . 'tests');
        },
    ],
];

//Executing commands and show output
call_user_func_array($config['commandExecutor'], [$commands]);

$webServerProcess->stop();
