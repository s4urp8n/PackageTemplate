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
                'tests',
                'codecept.phar',
                'phpdox.phar',
                'codeception.yml',
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
    //[
    //    'description' => 'Downloading PhpDocumentor...',
    //    'callback'    => function () use ($config)
    //    {
    //        PackageTemplate\downloadFile('http://phpdoc.org/phpDocumentor.phar');
    //    },
    //],
    //[
    //    'description' => 'Downloading PhpDox...',
    //    'callback'    => function () use ($config)
    //    {
    //        PackageTemplate\downloadFile(
    //            'https://github.com/theseer/phpdox/releases/download/0.8.1.1/phpdox-0.8.1.1.phar', 'phpdox.phar'
    //        );
    //    },
    //],
    [
        'description' => 'Downloading Codeception...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\downloadFile('http://codeception.com/releases/2.2.3/codecept.phar');
        },
    ],
];

//Executing commands and show output
PackageTemplate\executeCommands($commands);
