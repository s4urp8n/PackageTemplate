<?php

//Load configuration
$config = include 'config.php';

//Build commands array
$commands = [
    [
        'description' => 'Prepare started...',
    ],
    [
        'description' => 'Cleaning...',
        'callback'    => function () use ($config)
        {
            $removes = [
                'vendor',
                'codeception',
                'composer.lock',
                'apigen.phar',
                'phpDocumentor.phar',
                'docs',
                'c3.php',
            ];

            foreach ($removes as $remove)
            {
                PackageTemplate\removePath($remove);
            }
        },
    ],
    [
        'description' => 'Run Composer self-update...',
        'command'     => 'composer self-update',
    ],
    [
        'description' => 'Run Composer install...',
        'command'     => 'composer install',
    ],
    [
        'callback' => function () use ($config)
        {
            @mkdir('codeception');
        },
    ],
    [
        'description' => 'Bootstrap testing...',
        'command'     => 'php ' . $config['codeceptionPath'] . ' bootstrap codeception',
    ],
    [
        'description' => 'Downloading Apigen...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\downloadFile('https://github.com/ApiGen/ApiGen.github.io/raw/master/apigen.phar');
        },
    ],
    [
        'description' => 'Downloading PhpDocumentor...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\downloadFile('http://phpdoc.org/phpDocumentor.phar');
        },
    ],
];

//Executing commands and show output
PackageTemplate\executeCommands($commands);
