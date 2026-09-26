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
use Symfony\Component\Validator\Exception\ConstraintDefinitionException;

/**
 * Enables auto mapping.
 *
 * Using the annotations on a property has higher precedence than using it on a class,
 * which has higher precedence than any configuration that might be defined outside the class.
 *
 * @Annotation
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::TARGET_CLASS)]
class EnableAutoMapping extends Constraint
{
    public function __construct(?array $options = null)
    {
        if (\is_array($options) && \array_key_exists('groups', $options)) {
<<<<<<< HEAD
            throw new ConstraintDefinitionException(sprintf('The option "groups" is not supported by the constraint "%s".', __CLASS__));
=======
            throw new ConstraintDefinitionException(\sprintf('The option "groups" is not supported by the constraint "%s".', __CLASS__));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        parent::__construct($options);
    }

    public function getTargets(): string|array
    {
        return [self::PROPERTY_CONSTRAINT, self::CLASS_CONSTRAINT];
    }
}
