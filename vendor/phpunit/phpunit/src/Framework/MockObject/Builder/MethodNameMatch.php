<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Builder;

use PHPUnit\Framework\Constraint\Constraint;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface MethodNameMatch extends ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param Constraint $constraint Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
     *
     * @return ParametersMatch
     */
    public function method($constraint);
}
