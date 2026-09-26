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

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\LogicException;

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY", "METHOD", "ANNOTATION"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class When extends Composite
{
    public $expression;
    public $constraints = [];
    public $values = [];

    public function __construct(string|Expression|array $expression, array|Constraint|null $constraints = null, ?array $values = null, ?array $groups = null, $payload = null, array $options = [])
    {
        if (!class_exists(ExpressionLanguage::class)) {
<<<<<<< HEAD
            throw new LogicException(sprintf('The "symfony/expression-language" component is required to use the "%s" constraint. Try running "composer require symfony/expression-language".', __CLASS__));
=======
            throw new LogicException(\sprintf('The "symfony/expression-language" component is required to use the "%s" constraint. Try running "composer require symfony/expression-language".', __CLASS__));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if (\is_array($expression)) {
            $options = array_merge($expression, $options);
        } else {
            $options['expression'] = $expression;
<<<<<<< HEAD
            $options['constraints'] = $constraints;
=======

            if (null !== $constraints) {
                $options['constraints'] = $constraints;
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if (isset($options['constraints']) && !\is_array($options['constraints'])) {
            $options['constraints'] = [$options['constraints']];
        }

        if (null !== $groups) {
            $options['groups'] = $groups;
        }

        if (null !== $payload) {
            $options['payload'] = $payload;
        }

        parent::__construct($options);

        $this->values = $values ?? $this->values;
    }

    public function getRequiredOptions(): array
    {
        return ['expression', 'constraints'];
    }

    public function getTargets(): string|array
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }

    protected function getCompositeOption(): string
    {
        return 'constraints';
    }
}
