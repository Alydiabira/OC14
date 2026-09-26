<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class CheckSecurityCallNode extends Node
{
<<<<<<< HEAD
    public function compile(Compiler $compiler)
    {
        $compiler
            ->write("\$this->sandbox = \$this->env->getExtension(SandboxExtension::class);\n")
            ->write("\$this->checkSecurity();\n")
=======
    /**
     * @return void
     */
    public function compile(Compiler $compiler)
    {
        $compiler
            ->write("\$this->sandbox = \$this->extensions[SandboxExtension::class];\n")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ;
    }
}
