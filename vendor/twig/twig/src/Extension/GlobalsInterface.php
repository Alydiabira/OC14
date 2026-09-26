<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extension;

/**
<<<<<<< HEAD
 * Enables usage of the deprecated Twig\Extension\AbstractExtension::getGlobals() method.
 *
 * Explicitly implement this interface if you really need to implement the
 * deprecated getGlobals() method in your extensions.
=======
 * Allows Twig extensions to add globals to the context.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface GlobalsInterface
{
    /**
     * @return array<string, mixed>
     */
    public function getGlobals(): array;
}
