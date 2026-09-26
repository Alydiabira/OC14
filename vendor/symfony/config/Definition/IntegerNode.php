<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Definition;

use Symfony\Component\Config\Definition\Exception\InvalidTypeException;

/**
 * This node represents an integer value in the config tree.
 *
 * @author Jeanmonod David <david.jeanmonod@gmail.com>
 */
class IntegerNode extends NumericNode
{
    /**
     * @return void
     */
    protected function validateType(mixed $value)
    {
        if (!\is_int($value)) {
<<<<<<< HEAD
            $ex = new InvalidTypeException(sprintf('Invalid type for path "%s". Expected "int", but got "%s".', $this->getPath(), get_debug_type($value)));
=======
            $ex = new InvalidTypeException(\sprintf('Invalid type for path "%s". Expected "int", but got "%s".', $this->getPath(), get_debug_type($value)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($hint = $this->getInfo()) {
                $ex->addHint($hint);
            }
            $ex->setPath($this->getPath());

            throw $ex;
        }
    }

    protected function getValidPlaceholderTypes(): array
    {
        return ['int'];
    }
}
