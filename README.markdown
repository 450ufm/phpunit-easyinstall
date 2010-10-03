PHPUnit 3.5 Easy Install
========================

This fork allows you to easily use PHPUnit 3.5 (dev) without manually downloading all dependencies nor editing you php.ini include path.

It will only be useful until the official PHPUnit3.5 release.

Installation
------------

    git clone git://github.com/knplabs/phpunit-easyinstall.git phpunit
    cd phpunit
    git submodule init
    git submodule update

Now you can enjoy phpunit 3.5!

    php phpunit.php

Optionally you can add a symbolic link to your phpunit.php:

    sudo ln -s /home/me/.../phpunit/phpunit.php /usr/local/bin/phpunit