<?php
//Turn on implicit flush
ob_implicit_flush(true);

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Change shell directory to current
chdir(__DIR__);

include "functions.php";

$readme = <<<README
    
# Package-template

Use this package to create auto-tested, auto-integrated and auto-documented packages for all your projects

## That's included?

* [Codeception](http://codeception.com/) 2.2.3 (Acceptance and Unit tests) 
* [Travis-CI](https://travis-ci.org/) config files to easy CI 
* [Composer](https://getcomposer.org/) config file to easy create [Packagist](https://packagist.org/) package 
* [Apigen](http://www.apigen.org/) to documentation generation 
* Github README.md auto generation

## Requirements

* **php >= 5.5** and **composer** available to run from CLI (command line)

## How to use?

* Open console (command line) 
* Change rurrent dir to root of your project: **cd /root/of/your/project**
* Copy this package to root of your project: **composer create-project zver/package-template ./** (./ means install in current directory) */
* Run command to prepare package: **php prepare.php**
* Run command to test package: **php test.php**
* Run command to generate documentation: **php doc.php**
* All ready to develop you package! Do it!

## Directory structure

* /package/src - this is source files directory of your project (PSR-4 autoloaded)
* /package/tests - this directory store Codeception config files and tests
* /package/tests/acceptance - Codeception acceptance tests
* /package/tests/unit - Codeception unit tests
* /package/tests/_bootstrap.php - Codeception tests bootstrap ( usually uses for autoloading classes what used in tests)
* /package/codeception.yml - Codeception main config
* /package/pages - This directory store pages which you can use in acceptance tests. **!!!If this directory inexists acceptance tests will NOT be run!!!**
* /package/docs - This directory store documentation of your source files 
* composer.json - Composer dependencies 
* config.php - You package config file 
* prepare.php - Prepare script 
* test.php - Test script 
* doc.php - Doc script 
* function.php - Package-helper functions
* router.php - Route for PHP-webserver to find pages stored in /package/pages

## This is example of source code quality

_CODECLIMATE_HERE_

## This is example of coverage

_COVERAGE_HERE_

## This is example of source documentation

_API_HERE_

README;

return [
    'server'               => "127.0.0.1:4444",
    'packageName'          => "package",
    'codeceptionArguments' => '--skip functional --skip acceptance --coverage-xml --coverage-html --coverage-text --coverage',
    'readme'               => $readme,
];