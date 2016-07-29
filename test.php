<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$testResult = null;

$commands = [
    [
        'description' => 'Package testing started...',
    ],
    [
        'callback' => function () use ($config)
        {
            ob_start();
            chdir(__DIR__);
        },
    ],
    [
        'callback' => function () use ($config)
        {
            $removes = [
                'tests',
                'codeception.yml',
            ];
            
            foreach ($removes as $remove)
            {
                PackageTemplate\removePath($remove);
            }
        },
    ],
    [
        'command' => 'php codecept.phar bootstrap',
    ],
    [
        'description' => 'Replace testing files...',
        'callback'    => function () use ($config)
        {
            PackageTemplate\copyDirectory('package/tests', 'tests');
            unlink('codeception.yml');
            copy('package/codeception.yml', 'codeception.yml');
        },
    ],
    [
        'command' => 'php codecept.phar clean',
    ],
    [
        'command' => 'php codecept.phar build',
    ],
    [
        'description' => 'Testing...',
        'callback'    => function () use ($config, &$testResult)
        {
            ob_get_clean();
            
            $webServerRoot = __DIR__ . DIRECTORY_SEPARATOR . 'package' . DIRECTORY_SEPARATOR . 'pages';
            $webServerRouter = __DIR__ . DIRECTORY_SEPARATOR . 'router.php';
            $webServerCommand =
                'php -S ' . $config['server'] . ' -t "' . $webServerRoot . '" "' . $webServerRouter . '"';
            
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
            
            $testCommand = 'php codecept.phar run ' . $config['codeceptionArguments'];
            passthru($testCommand, $testResult);
            
            $pstatus = proc_get_status($webServerProcess);
            $pid = $pstatus['pid'];
            PackageTemplate\kill($pid);
            
        },
    ],
    [
        /**
         * Restore gitignore from changes by codeception
         */
        'command' => 'git checkout .gitignore',
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

echo 'Exit code: [' . $testResult . "]\n";

exit($testResult);
