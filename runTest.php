<?php

$webServerHandle = null;
$codeceptionStatus = null;
$config = include 'testConfig.php';

//Build commands array
$commands = [
    [
        'description' => 'ZVER package testing started...',
    ],
    [
        'callback'    => function ()
        {
            //Turn on implicit flush
            ob_implicit_flush(true);

            //Change shell directory to current
            shell_exec(escapeshellcmd('cd ' . __DIR__));
        },
        'description' => 'Changing directory to ' . __DIR__ . ' and turning on implicit flush...',
    ],
    [
        'description' => 'Downloading latest Composer...',
        'callback'    => function () use ($config)
        {
            call_user_func_array(
                $config['downloadFunction'], ['https://getcomposer.org/installer', 'composer-installer.php']
            );
        },
    ],
    [
        'description' => 'Installing Composer...',
        'command'     => 'php composer-installer.php',
    ],
    [
        'description' => 'Run Composer install with DEV...',
        'command'     => 'php composer.phar install --dev',
    ],
    [
        'description' => 'Running build-in WEB-server...',
        'callback'    => function () use ($config, &$webServerHandle)
        {
            $pipes = [];
            $descriptorspec = array(
                0 => array("pipe", "r"),
                1 => array("pipe", "w"),
                2 => array("pipe", "w"),
            );

            $webServerHandle = proc_open('php -S ' . $config['server'], $descriptorspec, $pipes);
        },
    ],
    [
        'description' => 'Build testing...',
        'command'     => 'php vendor' . DIRECTORY_SEPARATOR . 'codeception' . DIRECTORY_SEPARATOR . 'codeception'
                         . DIRECTORY_SEPARATOR . 'codecept build',
    ],
    [
        'description' => 'Clean testing...',
        'command'     => 'php vendor' . DIRECTORY_SEPARATOR . 'codeception' . DIRECTORY_SEPARATOR . 'codeception'
                         . DIRECTORY_SEPARATOR . 'codecept clean',
    ],
    [
        'description' => 'Testing...',
        'callback'    => function () use (&$codeceptionStatus)
        {
            $command = "php vendor" . DIRECTORY_SEPARATOR . "codeception" . DIRECTORY_SEPARATOR . "codeception"
                       . DIRECTORY_SEPARATOR
                       . "codecept run --coverage --coverage-xml --coverage-html --coverage-text --fail-fast";
            passthru($command, $codeceptionStatus);
        },
    ],
    [
        'description' => 'Terminating build-in WEB-server...',
        'callback'    => function () use (&$webServerHandle)
        {
            proc_terminate($webServerHandle);
        },
    ],
    [
        'description' => 'Cleaning...',
        'callback'    => function () use ($config)
        {
            $removes = [
                'composer.phar',
                'composer.lock',
                'codecept.phar',
                'composer-installer.php',
                'vendor',
                'tests' . DIRECTORY_SEPARATOR . '_output' . DIRECTORY_SEPARATOR . 'c3tmp',
                'c3.php',
            ];

            foreach ($removes as $remove)
            {
                $config['removeFunction']($remove);
            }
        },
    ],
];

//Executing commands and show output
call_user_func_array($config['commandExecutor'], [$commands]);

exit($codeceptionStatus);