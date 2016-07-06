# This is template repository of package

Easy to develop, easy to test, easy to integrate!

Use this package to develop any package of any project.
Travis-CI, Composer, Codeception config examples added and ready to deploy!

## Usage and structure

### Pages directory

Uses for web-server pages acceptance tests.
This directory will be **directory root** of php built-in webserver url **http://127.0.0.1:4444**

### Src directory

Uses for your source code files. You should use PSR-4 naming structure of files and folders.

### Tests directory

Uses for tests. Contains Codeception tests folders/files.
This directory will overwrite Codeception builded directory after prepare.php script will be executed.
**So, keep in mind,** to edit files in this folder, not in codeception folder, t



#### Prepare package to develop or test
```
php prepare.php
```

#### Run tests of package
```
php test.php
```

Enjoy!

