<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

<<<<<<< HEAD
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends Throwable
=======
/**
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \PHPUnit\Exception
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
}
