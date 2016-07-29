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
                'codeception.phar',
                'composer.lock',
                'apigen.phar',
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
        'description' => 'Composer clear cache...',
        'command'     => 'composer clear-cache',
    ],
    [
        'description' => 'Run Composer install...',
        'command'     => 'composer install',
    ],
    [
        'description' => 'Downloading Apigen...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\downloadFile('https://github.com/ApiGen/ApiGen.github.io/raw/master/apigen.phar');
        },
    ],
];

//Executing commands and show output
PackageTemplate\executeCommands($commands);
