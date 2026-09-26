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

use Symfony\Component\Intl\Locales;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * Validates whether a value is a valid locale code.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LocaleValidator extends ConstraintValidator
{
    /**
     * @return void
     */
    public function validate(mixed $value, Constraint $constraint)
    {
        if (!$constraint instanceof Locale) {
            throw new UnexpectedTypeException($constraint, Locale::class);
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!\is_scalar($value) && !$value instanceof \Stringable) {
            throw new UnexpectedValueException($value, 'string');
        }

        $inputValue = (string) $value;
        $value = $inputValue;
        if ($constraint->canonicalize) {
            $value = \Locale::canonicalize($value);
        }

<<<<<<< HEAD
        if (!Locales::exists($value)) {
=======
        if (null === $value || !Locales::exists($value)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($inputValue))
                ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
                ->addViolation();
        }
    }
}
