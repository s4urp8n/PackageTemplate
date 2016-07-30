    
# Package-template

Use this package to create auto-tested, auto-integrated and auto-documented packages for all your projects

## That's included?

* Codeception 2.2.3 (Acceptance and Unit tests)
* Travis-CI config files to easy CI
* Composer config file to easy create Packagist package
* Apigen to documentation generation
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
