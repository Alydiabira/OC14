<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tree\Traits;

/**
<<<<<<< HEAD
 * NestedSet Trait, usable with PHP >= 5.4
=======
 * Trait for objects in a nested tree.
 *
 * This implementation does not provide any mapping configurations.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Renaat De Muynck <renaat.demuynck@gmail.com>
 */
trait NestedSet
{
    /**
     * @var int
     */
    private $root;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $left;

    /**
     * @var int
     */
    private $right;
}
