<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authorization;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

/**
 * Define some ExpressionLanguage functions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions(): array
    {
        return [
<<<<<<< HEAD
            new ExpressionFunction('is_authenticated', fn () => '$auth_checker->isGranted("IS_AUTHENTICATED")', fn (array $variables) => $variables['auth_checker']->isGranted('IS_AUTHENTICATED')),

            new ExpressionFunction('is_fully_authenticated', fn () => '$token && $auth_checker->isGranted("IS_AUTHENTICATED_FULLY")', fn (array $variables) => $variables['token'] && $variables['auth_checker']->isGranted('IS_AUTHENTICATED_FULLY')),

            new ExpressionFunction('is_granted', fn ($attributes, $object = 'null') => sprintf('$auth_checker->isGranted(%s, %s)', $attributes, $object), fn (array $variables, $attributes, $object = null) => $variables['auth_checker']->isGranted($attributes, $object)),

            new ExpressionFunction('is_remember_me', fn () => '$token && $auth_checker->isGranted("IS_REMEMBERED")', fn (array $variables) => $variables['token'] && $variables['auth_checker']->isGranted('IS_REMEMBERED')),
=======
            new ExpressionFunction('is_authenticated', static fn () => '$auth_checker->isGranted("IS_AUTHENTICATED")', static fn (array $variables) => $variables['auth_checker']->isGranted('IS_AUTHENTICATED')),

            new ExpressionFunction('is_fully_authenticated', static fn () => '$token && $auth_checker->isGranted("IS_AUTHENTICATED_FULLY")', static fn (array $variables) => $variables['token'] && $variables['auth_checker']->isGranted('IS_AUTHENTICATED_FULLY')),

            new ExpressionFunction('is_granted', static fn ($attributes, $object = 'null') => \sprintf('$auth_checker->isGranted(%s, %s)', $attributes, $object), static fn (array $variables, $attributes, $object = null) => $variables['auth_checker']->isGranted($attributes, $object)),

            new ExpressionFunction('is_remember_me', static fn () => '$token && $auth_checker->isGranted("IS_REMEMBERED")', static fn (array $variables) => $variables['token'] && $variables['auth_checker']->isGranted('IS_REMEMBERED')),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ];
    }
}
