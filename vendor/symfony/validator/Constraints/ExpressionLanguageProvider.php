<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class ExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions(): array
    {
        return [
<<<<<<< HEAD
            new ExpressionFunction('is_valid', function (...$arguments) {
                return sprintf(
                    '0 === $context->getValidator()->inContext($context)->validate(%s)->getViolations()->count()',
                    implode(', ', $arguments)
                );
            }, function (array $variables, ...$arguments): bool {
                return 0 === $variables['context']->getValidator()->inContext($variables['context'])->validate(...$arguments)->getViolations()->count();
            }),
=======
            new ExpressionFunction('is_valid', static fn (...$arguments) => \sprintf(
                '0 === $context->getValidator()->inContext($context)->validate(%s)->getViolations()->count()',
                implode(', ', $arguments)
            ), static fn (array $variables, ...$arguments) => 0 === $variables['context']->getValidator()->inContext($variables['context'])->validate(...$arguments)->getViolations()->count()),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ];
    }
}
