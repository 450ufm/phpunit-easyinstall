<?php

$phpunitDependencies = array(
    'php-code-coverage',
    'php-file-iterator',
    'php-token-stream',
    'php-text-template',
    'php-timer',
    'phpunit-mock-objects',
);

$dependencies = join(PATH_SEPARATOR, array_map(function($lib) { return __DIR__ . '/Vendor/' . $lib;}, $phpunitDependencies));
set_include_path($dependencies . PATH_SEPARATOR . get_include_path());
