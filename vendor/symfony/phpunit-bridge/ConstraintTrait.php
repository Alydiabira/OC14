<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\PhpUnit;

use PHPUnit\Framework\Constraint\Constraint;

$r = new \ReflectionClass(Constraint::class);
<<<<<<< HEAD
if ($r->getProperty('exporter')->isProtected()) {
    trait ConstraintTrait
    {
        use Legacy\ConstraintTraitForV7;
    }
} elseif (!$r->getMethod('evaluate')->hasReturnType()) {
=======
if (!$r->getMethod('evaluate')->hasReturnType()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    trait ConstraintTrait
    {
        use Legacy\ConstraintTraitForV8;
    }
} else {
    trait ConstraintTrait
    {
        use Legacy\ConstraintTraitForV9;
    }
}
