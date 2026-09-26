<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Exception;

use Symfony\Component\Process\Process;

/**
 * Exception that is thrown when a process has been signaled.
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
final class ProcessSignaledException extends RuntimeException
{
    private Process $process;

    public function __construct(Process $process)
    {
        $this->process = $process;

<<<<<<< HEAD
        parent::__construct(sprintf('The process has been signaled with signal "%s".', $process->getTermSignal()));
=======
        parent::__construct(\sprintf('The process has been signaled with signal "%s".', $process->getTermSignal()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getProcess(): Process
    {
        return $this->process;
    }

    public function getSignal(): int
    {
        return $this->getProcess()->getTermSignal();
    }
}
