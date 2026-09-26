<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Polyfill\Intl\Normalizer as p;

if (!function_exists('normalizer_is_normalized')) {
    function normalizer_is_normalized(?string $string, ?int $form = p\Normalizer::FORM_C): bool { return p\Normalizer::isNormalized((string) $string, (int) $form); }
}
if (!function_exists('normalizer_normalize')) {
    function normalizer_normalize(?string $string, ?int $form = p\Normalizer::FORM_C): string|false { return p\Normalizer::normalize((string) $string, (int) $form); }
}
<<<<<<< HEAD
=======
if (!function_exists('normalizer_get_raw_decomposition')) {
    function normalizer_get_raw_decomposition(?string $string, ?int $form = p\Normalizer::FORM_C): ?string { return p\Normalizer::getRawDecomposition((string) $string, (int) $form); }
}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
