<?php

//Composer classes
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//Load configuration
$config = include 'config.php';

$structureFile = "docs/phpdoc/structure.xml";
$outputMarkdownFile = "docs/phpdoc/structure.md";

$commands = [
    [
        'description' => 'Package documenting started...',
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
        'command' => 'php apigen.phar generate --source package/src --destination docs/apigen',
    ],
    [
        'description' => 'Updating gh-pages...',
        'callback'    => function ()
        {
            
            $fetchURL = ArrayHelper::load(
                StringHelper::load(shell_exec("git remote show origin"))
                            ->toLinesArray()
            )
                                   ->map(
                                       function ($key, $value)
                                       {
                                           return StringHelper::load($value)
                                                              ->trimSpaces()
                                                              ->toLowerCase()
                                                              ->get();
                                       }
                                   )
                                   ->filter(
                                       function ($key, $value)
                                       {
                                           return StringHelper::load($value)
                                                              ->isStartsWith('fetch url: ');
                                       }
                                   )
                                   ->map(
                                       function ($key, $value)
                                       {
                                           return StringHelper::load($value)
                                                              ->substring(11)
                                                              ->get();
                                       }
                                   )
                                   ->getFirstValue();
            
            shell_exec('git clone "' . $fetchURL . '" docs/gh-pages');
            
            $currentDir = getcwd();
            
            chdir('docs/gh-pages');
            
            shell_exec('git checkout -b gh-pages');
            
            PackageTemplate\removePath(__DIR__);
            
            print_r(scandir(__DIR__));
            
            chdir($currentDir);
            
        },
    ],
    //[
    //    'command' => 'php phpDocumentor.phar -d package/src -t docs/phpdoc --template="xml" --template="responsive-twig"',
    //],
    //[
    //    'command' => 'php phpdox.phar',
    //],
    //[
    //    'description' => 'Generating markdown...',
    //    'callback'    => function () use ($config, $structureFile, $outputMarkdownFile)
    //    {
    //
    //        $xml = simplexml_load_file($structureFile);
    //
    //        $markdownTable = function (array $data)
    //        {
    //            if (!empty($data))
    //            {
    //
    //                $data = array_values($data);
    //
    //                $header = array_keys($data[0]);
    //                $border = array_map(
    //                    function ($value)
    //                    {
    //                        return '---';
    //                    }, $header
    //                );
    //
    //                $values = [];
    //
    //                foreach ($data as $row)
    //                {
    //                    $columnValues = [];
    //                    foreach ($row as $column => $value)
    //                    {
    //                        $columnValues[] = $value;
    //                    }
    //                    $values[] = implode('|', $columnValues);
    //                }
    //
    //                $header = implode('|', $header);
    //                $border = implode('|', $border);
    //                $values = implode('|', $values);
    //
    //                return "\n" . implode(
    //                    "\n", [
    //                            $header,
    //                            $border,
    //                            $values,
    //                        ]
    //                ) . "\n";
    //            }
    //
    //            return '';
    //
    //        };
    //
    //        $processArguments = function (SimpleXMLElement $node) use ($markdownTable)
    //        {
    //            $markdown = "#### Arguments\n";
    //
    //            $values = [];
    //
    //            foreach ($node->argument as $argument)
    //            {
    //                $values[] = [
    //                    'Name'          => $argument->name,
    //                    'Default value' => $argument->default,
    //                    'Type'          => $argument->type,
    //                    'By reference'  => $argument->attributes()->by_reference,
    //                ];
    //            }
    //
    //            if (empty($values))
    //            {
    //                return '';
    //            }
    //
    //            return $markdown . $markdownTable($values);
    //        };
    //
    //        $processMethods = function (SimpleXMLElement $node) use ($markdownTable, $processArguments)
    //        {
    //            $markdown = '';
    //            foreach ($node->method as $method)
    //            {
    //                $markdown .= "#### Method " . $method->name . "\n";
    //                $markdown .= $processArguments($method);
    //            }
    //
    //            return $markdown;
    //        };
    //
    //        $processProperties = function (SimpleXMLElement $node) use ($markdownTable)
    //        {
    //            $markdown = "#### Properties\n";
    //
    //            $values = [];
    //
    //            foreach ($node->property as $property)
    //            {
    //                $values[] = [
    //                    'Name'          => $property->name,
    //                    'Is static'     => $property->attributes()->static,
    //                    'Visibility'    => $property->attributes()->visibility,
    //                    'Default value' => $property->default,
    //                    'Description'   => $property->docblock->description,
    //                ];
    //            }
    //
    //            if (empty($values))
    //            {
    //                return '';
    //            }
    //
    //            return $markdown . $markdownTable($values);
    //        };
    //
    //        $processNodeOpen = function (SimpleXMLElement $node, $type)
    //        {
    //            return \Zver\StringHelper::load($type)
    //                                     ->trimSpaces()
    //                                     ->toUpperCaseFirst()
    //                                     ->prepend('### ')
    //                                     ->append(" ")
    //                                     ->append('**' . $node->full_name . '**')
    //                                     ->append("\n\n")
    //                                     ->get();
    //        };
    //
    //        $processNodeEnd = function (SimpleXMLElement $node, $type)
    //        {
    //            return "\n\n\n";
    //        };
    //
    //        $processNode = function ($node, $type) use (
    //            $processNodeOpen, $processNodeEnd, $processProperties, $processArguments, $processMethods
    //        )
    //        {
    //
    //            $markdown = $processNodeOpen($node, $type);
    //
    //            $markdown .= $processArguments($node);
    //            $markdown .= $processProperties($node);
    //            $markdown .= $processMethods($node);
    //
    //            return $markdown . $processNodeEnd($node, $type);
    //
    //        };
    //
    //        $nodes = [
    //            'functions'  => [],
    //            'interfaces' => [],
    //            'classes'    => [],
    //            'traits'     => [],
    //        ];
    //
    //        foreach ($xml->file as $file)
    //        {
    //
    //            foreach ($file->function as $function)
    //            {
    //                $nodes['functions'][] = $function;
    //            }
    //
    //            foreach ($file->interface as $interface)
    //            {
    //                $nodes['interfaces'][] = $interface;
    //            }
    //
    //            foreach ($file->class as $class)
    //            {
    //                $nodes['classes'][] = $class;
    //            }
    //
    //            foreach ($file->trait as $trait)
    //            {
    //                $nodes['traits'][] = $trait;
    //            }
    //        }
    //
    //        $markdown = "# DOCUMENTATION\n\n";
    //
    //        if (!empty($nodes['functions']))
    //        {
    //            $markdown .= "## Functions\n\n";
    //            foreach ($nodes['functions'] as $function)
    //            {
    //                $markdown .= $processNode($function, 'function');
    //                $markdown .= "---\n\n";
    //            }
    //        }
    //
    //        if (!empty($nodes['interfaces']))
    //        {
    //            $markdown .= "## Interfaces\n\n";
    //            foreach ($nodes['interfaces'] as $interface)
    //            {
    //                $markdown .= $processNode($interface, 'interface');
    //                $markdown .= "---\n\n";
    //            }
    //        }
    //
    //        if (!empty($nodes['classes']))
    //        {
    //            $markdown .= "## Classes\n\n";
    //            foreach ($nodes['classes'] as $class)
    //            {
    //                $markdown .= $processNode($class, 'class');
    //                $markdown .= "---\n\n";
    //            }
    //        }
    //
    //        if (!empty($nodes['traits']))
    //        {
    //            $markdown .= "## Traits\n\n";
    //            foreach ($nodes['traits'] as $trait)
    //            {
    //                $markdown .= $processNode($trait, 'trait');
    //                $markdown .= "---\n\n";
    //            }
    //        }
    //
    //        file_put_contents($outputMarkdownFile, $markdown, LOCK_EX);
    //
    //    },
    //],
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