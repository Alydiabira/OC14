<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;
<<<<<<< HEAD

class AddBinary extends AbstractBinary
=======
use Twig\Node\Expression\ReturnNumberInterface;

class AddBinary extends AbstractBinary implements ReturnNumberInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('+');
    }
}
