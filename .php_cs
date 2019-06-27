<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in('src/')
    ->exclude([
        'bin',
        'build',
        'vendor',
    ])
;

return Config::create()
    ->setRules([
        '@Symfony' => true,
        'phpdoc_align' => false,
    ])
    ->setFinder($finder)
;
