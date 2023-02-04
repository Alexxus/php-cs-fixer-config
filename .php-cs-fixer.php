<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PSR12' => true,
    'array_indentation' => true,
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],
    'braces' => [
        'position_after_control_structures' => 'next',
    ],
    'cast_spaces' => true,
    'fully_qualified_strict_types' => true,
    'function_typehint_space' => true,
    'linebreak_after_opening_tag' => true,
    'magic_constant_casing' => true,
    'no_empty_statement' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'normalize_index_brace' => true,
    'ordered_imports' => [
        'sort_algorithm' => 'alpha',
    ],
    'single_quote' => true,
    'standardize_not_equals' => true,
    'trailing_comma_in_multiline' => [
        'elements' => ['arrays'],
    ],
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
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

return  (new Config())
        ->setFinder($finder)
        ->setRules($rules)
        ->setUsingCache(true);
