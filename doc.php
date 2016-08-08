<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$structureFile = "docs/phpdoc/structure.xml";
$outputMarkdownFile = "docs/phpdoc/structure.md";

$commands = [
    //[
    //    'description' => 'Package documenting started...',
    //],
    //[
    //    'callback' => function () use ($config)
    //    {
    //        chdir(__DIR__);
    //    },
    //],
    //[
    //    'callback' => function () use ($config)
    //    {
    //        $removes = [
    //            'docs',
    //        ];
    //
    //        foreach ($removes as $remove)
    //        {
    //            PackageTemplate\removePath($remove);
    //        }
    //    },
    //],
    //[
    //    'command' => 'php apigen.phar generate --source package/src --destination docs/apigen --template-theme bootstrap',
    //],
    //[
    //    'command' => 'php phpDocumentor.phar -d package/src -t docs/phpdoc --template="xml" --template="responsive-twig"',
    //],
    [
        'description' => 'Generating markdown...',
        'callback'    => function () use ($config, $structureFile, $outputMarkdownFile)
        {
            
            $xml = simplexml_load_file($structureFile);
            
            $processArguments = function (SimpleXMLElement $node)
            {
                $markdown = "#### Arguments\n";
                $markdown .= "Name|Default|Type|By reference\n";
                $markdown .= "---|---|---|---\n";
                foreach ($node->argument as $argument)
                {
                    $markdown .= implode(
                        ' | ', [
                                 $argument->name,
                                 $argument->default,
                                 $argument->type,
                                 $argument->attributes()->by_reference,
                             ]
                    );
                }
            };
            
            $processNodeOpen = function (SimpleXMLElement $node, $type)
            {
                return \Zver\StringHelper::load($type)
                                         ->trimSpaces()
                                         ->toUpperCaseFirst()
                                         ->prepend('### ')
                                         ->append(" ")
                                         ->append('**' . $node->full_name . '**')
                                         ->append("\n\n")
                                         ->get();
            };
            
            $processNodeEnd = function (SimpleXMLElement $node, $type)
            {
                return "\n\n\n";
            };
            
            $processMethod = function (SimpleXMLElement $node, $type, SimpleXMLElement $method) use ($processArguments)
            {
                return '';
            };
            
            $processProperty = function (SimpleXMLElement $node, $type, SimpleXMLElement $property)
            {
                return implode(
                    ' | ', [
                             $property->name,
                             $property->attributes()->static,
                             $property->attributes()->visibility,
                             $property->default,
                             $property->docblock->description,
                         ]
                );
                
            };
            
            $processNode = function ($node, $type) use (
                $processNodeOpen, $processNodeEnd, $processMethod, $processProperty, $processArguments
            )
            {
                
                $markdown = $processNodeOpen($node, $type);
                
                if ($type == 'function')
                {
                    $markdown .= $processArguments($node);
                }
                else
                {
                    
                    foreach ($node->property as $property)
                    {
                        $markdown .= "#### Properties\n";
                        $markdown .= "Name|Static|Visibility|Default|Description\n";
                        $markdown .= "---|---|---|---|---\n";
                        $markdown .= $processProperty($node, $type, $property) . "\n";
                    }
                    
                    foreach ($node->method as $method)
                    {
                        $markdown .= $processMethod($node, $type, $method);
                    }
                }
                
                return $markdown . $processNodeEnd($node, $type);
                
            };
            
            $nodes = [
                'functions'  => [],
                'interfaces' => [],
                'classes'    => [],
                'traits'     => [],
            ];
            
            foreach ($xml->file as $file)
            {
                
                foreach ($file->function as $function)
                {
                    $nodes['functions'][] = $function;
                }
                
                foreach ($file->interface as $interface)
                {
                    $nodes['interfaces'][] = $interface;
                }
                
                foreach ($file->class as $class)
                {
                    $nodes['classes'][] = $class;
                }
                
                foreach ($file->trait as $trait)
                {
                    $nodes['traits'][] = $trait;
                }
            }
            
            $markdown = '';
            
            foreach ($nodes['functions'] as $function)
            {
                $markdown .= $processNode($function, 'function');
            }
            foreach ($nodes['interfaces'] as $interface)
            {
                $markdown .= $processNode($interface, 'interface');
            }
            foreach ($nodes['classes'] as $class)
            {
                $markdown .= $processNode($class, 'class');
            }
            foreach ($nodes['traits'] as $trait)
            {
                $markdown .= $processNode($trait, 'trait');
            }
            
            file_put_contents($outputMarkdownFile, $markdown, LOCK_EX);
            
        },
    ],
    //[
    //    'callback' => function () use ($config)
    //    {
    //        PackageTemplate\updateReadme($config);
    //    },
    //],
    //[
    //    'callback' => function () use ($config)
    //    {
    //        passthru('git add docs');
    //        passthru('git add README.md');
    //    },
    //],
];

//Executing commands and show output
PackageTemplate\executeCommands($commands);