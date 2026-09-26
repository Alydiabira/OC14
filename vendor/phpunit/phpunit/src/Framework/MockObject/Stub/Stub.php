<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use PHPUnit\Framework\SelfDescribing;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface Stub extends SelfDescribing
{
    /**
     * Fakes the processing of the invocation $invocation by returning a
     * specific value.
     *
     * @param Invocation $invocation The invocation which was mocked and matched by the current method and argument matchers
     */
    public function invoke(Invocation $invocation);
}
