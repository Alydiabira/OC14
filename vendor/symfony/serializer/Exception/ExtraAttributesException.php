<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Exception;

/**
 * ExtraAttributesException.
 *
 * @author Julien DIDIER <julien@didier.io>
 */
class ExtraAttributesException extends RuntimeException
{
    public function __construct(
        private readonly array $extraAttributes,
        ?\Throwable $previous = null,
    ) {
<<<<<<< HEAD
        $msg = sprintf('Extra attributes are not allowed ("%s" %s unknown).', implode('", "', $extraAttributes), \count($extraAttributes) > 1 ? 'are' : 'is');
=======
        $msg = \sprintf('Extra attributes are not allowed ("%s" %s unknown).', implode('", "', $extraAttributes), \count($extraAttributes) > 1 ? 'are' : 'is');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        parent::__construct($msg, 0, $previous);
    }

    /**
     * Get the extra attributes that are not allowed.
     */
    public function getExtraAttributes(): array
    {
        return $this->extraAttributes;
    }
}
