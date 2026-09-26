<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\RuntimeException;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface, StreamableInputInterface
{
    protected $definition;
    /** @var resource */
    protected $stream;
    protected $options = [];
    protected $arguments = [];
    protected $interactive = true;

    public function __construct(?InputDefinition $definition = null)
    {
        if (null === $definition) {
            $this->definition = new InputDefinition();
        } else {
            $this->bind($definition);
            $this->validate();
        }
    }

    /**
     * @return void
     */
    public function bind(InputDefinition $definition)
    {
        $this->arguments = [];
        $this->options = [];
        $this->definition = $definition;

        $this->parse();
    }

    /**
     * Processes command line arguments.
     *
     * @return void
     */
    abstract protected function parse();

    /**
     * @return void
     */
    public function validate()
    {
        $definition = $this->definition;
        $givenArguments = $this->arguments;

<<<<<<< HEAD
        $missingArguments = array_filter(array_keys($definition->getArguments()), fn ($argument) => !\array_key_exists($argument, $givenArguments) && $definition->getArgument($argument)->isRequired());

        if (\count($missingArguments) > 0) {
            throw new RuntimeException(sprintf('Not enough arguments (missing: "%s").', implode(', ', $missingArguments)));
=======
        $missingArguments = array_filter(array_keys($definition->getArguments()), static fn ($argument) => !\array_key_exists($argument, $givenArguments) && $definition->getArgument($argument)->isRequired());

        if ($missingArguments) {
            throw new RuntimeException(\sprintf('Not enough arguments (missing: "%s").', implode(', ', $missingArguments)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    public function isInteractive(): bool
    {
        return $this->interactive;
    }

    /**
     * @return void
     */
    public function setInteractive(bool $interactive)
    {
        $this->interactive = $interactive;
    }

    public function getArguments(): array
    {
        return array_merge($this->definition->getArgumentDefaults(), $this->arguments);
    }

    public function getArgument(string $name): mixed
    {
        if (!$this->definition->hasArgument($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" argument does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this->arguments[$name] ?? $this->definition->getArgument($name)->getDefault();
    }

    /**
     * @return void
     */
    public function setArgument(string $name, mixed $value)
    {
        if (!$this->definition->hasArgument($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" argument does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->arguments[$name] = $value;
    }

    public function hasArgument(string $name): bool
    {
        return $this->definition->hasArgument($name);
    }

    public function getOptions(): array
    {
        return array_merge($this->definition->getOptionDefaults(), $this->options);
    }

    public function getOption(string $name): mixed
    {
        if ($this->definition->hasNegation($name)) {
            if (null === $value = $this->getOption($this->definition->negationToName($name))) {
                return $value;
            }

            return !$value;
        }

        if (!$this->definition->hasOption($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" option does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return \array_key_exists($name, $this->options) ? $this->options[$name] : $this->definition->getOption($name)->getDefault();
    }

    /**
     * @return void
     */
    public function setOption(string $name, mixed $value)
    {
        if ($this->definition->hasNegation($name)) {
            $this->options[$this->definition->negationToName($name)] = !$value;

            return;
        } elseif (!$this->definition->hasOption($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" option does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->options[$name] = $value;
    }

    public function hasOption(string $name): bool
    {
        return $this->definition->hasOption($name) || $this->definition->hasNegation($name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     */
    public function escapeToken(string $token): string
    {
        return preg_match('{^[\w-]+$}', $token) ? $token : escapeshellarg($token);
    }

    /**
     * @param resource $stream
     *
     * @return void
     */
    public function setStream($stream)
    {
        $this->stream = $stream;
    }

    /**
     * @return resource
     */
    public function getStream()
    {
        return $this->stream;
    }
}
