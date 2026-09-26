<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Test;

use Symfony\Component\Process\Process;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class MakerTestProcess
{
    private Process $process;

<<<<<<< HEAD
    private function __construct($commandLine, $cwd, array $envVars, $timeout)
=======
    /**
     * @param string|list<string> $commandLine
     */
    private function __construct(string|array $commandLine, string $cwd, array $envVars, ?float $timeout)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->process = \is_string($commandLine)
            ? Process::fromShellCommandline($commandLine, $cwd, null, null, $timeout)
            : new Process($commandLine, $cwd, null, null, $timeout);

        $this->process->setEnv($envVars);
    }

<<<<<<< HEAD
    public static function create($commandLine, $cwd, array $envVars = [], $timeout = null): self
=======
    /**
     * @param string|list<string> $commandLine
     */
    public static function create(string|array $commandLine, string $cwd, array $envVars = [], ?float $timeout = null): self
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return new self($commandLine, $cwd, $envVars, $timeout);
    }

    public function setInput($input): self
    {
        $this->process->setInput($input);

        return $this;
    }

    public function run($allowToFail = false, array $envVars = []): self
    {
        if (false !== ($timeout = getenv('MAKER_PROCESS_TIMEOUT'))) {
<<<<<<< HEAD
=======
            if ('null' === $timeout) {
                $timeout = null;
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            // Setting a value of null allows for step debugging
            $this->process->setTimeout($timeout);
        }

        $this->process->run(null, $envVars);

        if (!$allowToFail && !$this->process->isSuccessful()) {
<<<<<<< HEAD
            throw new \Exception(sprintf('Error running command: "%s". Output: "%s". Error: "%s"', $this->process->getCommandLine(), $this->process->getOutput(), $this->process->getErrorOutput()));
=======
            throw new \Exception(\sprintf('Error running command: "%s". Output: "%s". Error: "%s"', $this->process->getCommandLine(), $this->process->getOutput(), $this->process->getErrorOutput()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this;
    }

    public function isSuccessful(): bool
    {
        return $this->process->isSuccessful();
    }

    public function getOutput(): string
    {
        return $this->process->getOutput();
    }

    public function getErrorOutput(): string
    {
        return $this->process->getErrorOutput();
    }
}
