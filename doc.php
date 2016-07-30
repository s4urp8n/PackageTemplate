<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$commands = [
    [
        'description' => 'Package documenting using Apigen started...',
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
                'docs',
            ];
            
            foreach ($removes as $remove)
            {
                PackageTemplate\removePath($remove);
            }
        },
    ],
    [
        'command' => 'php apigen.phar generate --source package/src --destination docs/ --template-theme bootstrap',
    ],
    [
        'callback' => function () use ($config)
        {
            PackageTemplate\updateReadme($config);
        },
    ],
    [
        'callback' => function () use ($config)
        {
            passthru('git add docs');
            passthru('git add README.md');
        },
    ],
];

//Executing commands and show output
PackageTemplate\executeCommands($commands);