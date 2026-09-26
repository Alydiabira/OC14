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
 * @Annotation
 * @Target({"CLASS"})
 *
 * @author Jules Pietri <jules@heahprod.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Cascade extends Constraint
{
    public array $exclude = [];

    public function __construct(array|string|null $exclude = null, ?array $options = null)
    {
        if (\is_array($exclude) && !array_is_list($exclude)) {
            $options = array_merge($exclude, $options ?? []);
<<<<<<< HEAD
=======
            $options['exclude'] = array_flip((array) ($options['exclude'] ?? []));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        } else {
            $this->exclude = array_flip((array) $exclude);
        }

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
        return self::CLASS_CONSTRAINT;
    }
}
