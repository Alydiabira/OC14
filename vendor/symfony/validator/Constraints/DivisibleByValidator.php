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

use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * Validates that values are a multiple of the given number.
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleByValidator extends AbstractComparisonValidator
{
    protected function compareValues(mixed $value1, mixed $value2): bool
    {
        if (!is_numeric($value1)) {
            throw new UnexpectedValueException($value1, 'numeric');
        }

        if (!is_numeric($value2)) {
            throw new UnexpectedValueException($value2, 'numeric');
        }

        if (!$value2 = abs($value2)) {
            return false;
        }
        if (\is_int($value1 = abs($value1)) && \is_int($value2)) {
            return 0 === ($value1 % $value2);
        }
        if (!$remainder = fmod($value1, $value2)) {
            return true;
        }
        if (\is_float($value2) && \INF !== $value2) {
            $quotient = $value1 / $value2;
            $rounded = round($quotient);

<<<<<<< HEAD
            return sprintf('%.12e', $quotient) === sprintf('%.12e', $rounded);
        }

        return sprintf('%.12e', $value2) === sprintf('%.12e', $remainder);
=======
            return \sprintf('%.12e', $quotient) === \sprintf('%.12e', $rounded);
        }

        return \sprintf('%.12e', $value2) === \sprintf('%.12e', $remainder);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function getErrorCode(): ?string
    {
        return DivisibleBy::NOT_DIVISIBLE_BY;
    }
}
