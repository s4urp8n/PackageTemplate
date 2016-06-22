<?php

$webServerHandle = null;
$codeceptionStatus = null;
$config = include 'config.php';

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
        'description' => 'Run Composer install...',
        'command'     => 'php composer.phar install',
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
        'description' => 'Cleaning documentation...',
        'callback'    => function () use ($config)
        {
            $removes = [
                'docs',
            ];

            foreach ($removes as $remove)
            {
                $config['removeFunction']($remove);
            }
        },
    ],
    [
        'description' => 'Generating documentation using phpDocumentor...',
        'command'     => 'php vendor' . DIRECTORY_SEPARATOR . 'phpdocumentor' . DIRECTORY_SEPARATOR . 'phpdocumentor'
                         . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'phpdoc -d .' . DIRECTORY_SEPARATOR
                         . 'src -t .' . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR
                         . 'phpdoc --template="clean" --template="xml"',
    ],
    //[
    //    'description' => 'Generating documentation using phpDocMD...',
    //    'command'     => 'php vendor/evert/phpdoc-md/bin/phpdocmd docs/phpdoc/structure.xml [outputdir]',
    //],
    //[
    //    'description' => 'Cleaning...',
    //    'callback'    => function () use ($config)
    //    {
    //        foreach ($config['clean'] as $remove)
    //        {
    //            $config['removeFunction']($remove);
    //        }
    //    },
    //],
];

//Executing commands and show output
call_user_func_array($config['commandExecutor'], [$commands]);

exit($codeceptionStatus);