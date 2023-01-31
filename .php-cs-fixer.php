<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    'braces' => [
        'position_after_control_structures' => 'next',
    ]
];

$finder =   Finder::create()
            ->in([
                __DIR__ . '/app',
                __DIR__ . '/bootstrap',
                __DIR__ . '/config',
                __DIR__ . '/database',
                __DIR__ . '/resources',
                __DIR__ . '/routes',
                __DIR__ . '/tests',
            ])
            ->name('*.php')
            ->ignoreDotFiles(true);

return  (new Config)
        ->setFinder($finder)
        ->setRules($rules)
        ->setUsingCache(true);