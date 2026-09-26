<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing an unknown, or mixed, type.
 *
 * @psalm-immutable
 */
<<<<<<< HEAD
final class Mixed_ implements Type
=======
class Mixed_ implements Type
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString(): string
    {
        return 'mixed';
    }
}
