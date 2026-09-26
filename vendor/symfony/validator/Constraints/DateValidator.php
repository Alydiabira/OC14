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

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DateValidator extends ConstraintValidator
{
<<<<<<< HEAD
    public const PATTERN = '/^(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})$/';
=======
    public const PATTERN = '/^(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})$/D';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Checks whether a date is valid.
     *
     * @internal
     */
    public static function checkDate(int $year, int $month, int $day): bool
    {
        return checkdate($month, $day, $year);
    }

    /**
     * @return void
     */
    public function validate(mixed $value, Constraint $constraint)
    {
        if (!$constraint instanceof Date) {
            throw new UnexpectedTypeException($constraint, Date::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!\is_scalar($value) && !$value instanceof \Stringable) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkDate(
            $matches['year'] ?? $matches[1],
            $matches['month'] ?? $matches[2],
            $matches['day'] ?? $matches[3]
        )) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_DATE_ERROR)
                ->addViolation();
        }
    }
}
