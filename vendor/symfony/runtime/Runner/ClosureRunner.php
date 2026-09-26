<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Runtime\Runner;

use Symfony\Component\Runtime\RunnerInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ClosureRunner implements RunnerInterface
{
    public function __construct(
        private readonly \Closure $closure,
    ) {
    }

    public function run(): int
    {
        $exitStatus = ($this->closure)();

        if (\is_string($exitStatus)) {
            echo $exitStatus;

            return 0;
        }

        if (null !== $exitStatus && !\is_int($exitStatus)) {
            $r = new \ReflectionFunction($this->closure);

<<<<<<< HEAD
            throw new \TypeError(sprintf('Unexpected value of type "%s" returned, "string|int|null" expected from "%s" on line "%d".', get_debug_type($exitStatus), $r->getFileName(), $r->getStartLine()));
=======
            throw new \TypeError(\sprintf('Unexpected value of type "%s" returned, "string|int|null" expected from "%s" on line "%d".', get_debug_type($exitStatus), $r->getFileName(), $r->getStartLine()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $exitStatus ?? 0;
    }
}
