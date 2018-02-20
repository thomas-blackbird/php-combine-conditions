<?php
/**
 * Copyright © 2018 Thomas Klein, All rights reserved.
 */
/**
 * Pre-commit hook installation:
 * vendor/bin/static-review.php hook:install dev/tools/Magento/Tools/StaticReview/pre-commit .git/hooks/pre-commit
 */
$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->name('*.php');
return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'include' => true,
        'new_with_braces' => true,
        'no_empty_statement' => true,
        'no_extra_consecutive_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unused_imports' => true,
        'no_whitespace_in_blank_line' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
    ]);
