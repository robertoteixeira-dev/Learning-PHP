<?php

/*
COMPOSER is a tool for dependency management
in PHP and it lets we install various libraries
and packages into your project

- It can also help you with outoloading

https://packagist.org/?query=uuid

ramsey/uuid 
- remember of reading the package to see if its what you are looking for

# run on your terminal: composer require ramsey/uuid

It will install:
- composer.json
- composer.lock
- coding-standards.php 
- vendor 
    - In vendor is a file called outoload.php

COMPOSER.JSON
    Its your configuration file where ou put all
    your dependencies

You could also use composer init to create the composer.json 

COMPOSER.LOCK
    It locks your dependencies to a fixed state
    It locks your project to those specific versions

Send it to GIT 

VENDOR
    This is where all of your dependencies souce
    code will exist


DIFFERENCE BETWEEN REQUIRE AND REQUIRE-DEV
    - Require lists the dependencies for your project
    and they need to be installed in production

    - Require-dev lists the packages that are
    needed for development. Dependencies from 
    require dev will not be installed if your 
    package is being installed as a dependency
    for something else

OUTOLOAD.PHP
    On your index put:

    require __DIR__ . '/vendor/outoload.php';

    $id = new \Ramsey\Uuid\UuidFactory();

    echo $id->uuid4();

    //WE HAVE TO TEACH THE COMPOSER.JSON HOW TO CALL OUR CLASS 
        - put the code on the composer.json
        - run: composer dump-autoload -o
        - check the autoload_psr4 file

    //ADD THE VENDOR TO YOUR GIT IGNORE!!!
*/






?>