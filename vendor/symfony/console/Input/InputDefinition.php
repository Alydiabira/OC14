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
use Symfony\Component\Console\Exception\LogicException;

/**
 * A InputDefinition represents a set of valid command line arguments and options.
 *
 * Usage:
 *
 *     $definition = new InputDefinition([
 *         new InputArgument('name', InputArgument::REQUIRED),
 *         new InputOption('foo', 'f', InputOption::VALUE_REQUIRED),
 *     ]);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputDefinition
{
    private array $arguments = [];
    private int $requiredCount = 0;
    private ?InputArgument $lastArrayArgument = null;
    private ?InputArgument $lastOptionalArgument = null;
    private array $options = [];
    private array $negations = [];
    private array $shortcuts = [];

    /**
     * @param array $definition An array of InputArgument and InputOption instance
     */
    public function __construct(array $definition = [])
    {
        $this->setDefinition($definition);
    }

    /**
     * Sets the definition of the input.
     *
     * @return void
     */
    public function setDefinition(array $definition)
    {
        $arguments = [];
        $options = [];
        foreach ($definition as $item) {
            if ($item instanceof InputOption) {
                $options[] = $item;
            } else {
                $arguments[] = $item;
            }
        }

        $this->setArguments($arguments);
        $this->setOptions($options);
    }

    /**
     * Sets the InputArgument objects.
     *
     * @param InputArgument[] $arguments An array of InputArgument objects
     *
     * @return void
     */
    public function setArguments(array $arguments = [])
    {
        $this->arguments = [];
        $this->requiredCount = 0;
        $this->lastOptionalArgument = null;
        $this->lastArrayArgument = null;
        $this->addArguments($arguments);
    }

    /**
     * Adds an array of InputArgument objects.
     *
     * @param InputArgument[] $arguments An array of InputArgument objects
     *
     * @return void
     */
    public function addArguments(?array $arguments = [])
    {
        if (null !== $arguments) {
            foreach ($arguments as $argument) {
                $this->addArgument($argument);
            }
        }
    }

    /**
     * @return void
     *
     * @throws LogicException When incorrect argument is given
     */
    public function addArgument(InputArgument $argument)
    {
        if (isset($this->arguments[$argument->getName()])) {
<<<<<<< HEAD
            throw new LogicException(sprintf('An argument with name "%s" already exists.', $argument->getName()));
        }

        if (null !== $this->lastArrayArgument) {
            throw new LogicException(sprintf('Cannot add a required argument "%s" after an array argument "%s".', $argument->getName(), $this->lastArrayArgument->getName()));
        }

        if ($argument->isRequired() && null !== $this->lastOptionalArgument) {
            throw new LogicException(sprintf('Cannot add a required argument "%s" after an optional one "%s".', $argument->getName(), $this->lastOptionalArgument->getName()));
=======
            throw new LogicException(\sprintf('An argument with name "%s" already exists.', $argument->getName()));
        }

        if (null !== $this->lastArrayArgument) {
            throw new LogicException(\sprintf('Cannot add a required argument "%s" after an array argument "%s".', $argument->getName(), $this->lastArrayArgument->getName()));
        }

        if ($argument->isRequired() && null !== $this->lastOptionalArgument) {
            throw new LogicException(\sprintf('Cannot add a required argument "%s" after an optional one "%s".', $argument->getName(), $this->lastOptionalArgument->getName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($argument->isArray()) {
            $this->lastArrayArgument = $argument;
        }

        if ($argument->isRequired()) {
            ++$this->requiredCount;
        } else {
            $this->lastOptionalArgument = $argument;
        }

        $this->arguments[$argument->getName()] = $argument;
    }

    /**
     * Returns an InputArgument by name or by position.
     *
     * @throws InvalidArgumentException When argument given doesn't exist
     */
    public function getArgument(string|int $name): InputArgument
    {
        if (!$this->hasArgument($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "%s" argument does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $arguments = \is_int($name) ? array_values($this->arguments) : $this->arguments;

        return $arguments[$name];
    }

    /**
     * Returns true if an InputArgument object exists by name or position.
     */
    public function hasArgument(string|int $name): bool
    {
        $arguments = \is_int($name) ? array_values($this->arguments) : $this->arguments;

        return isset($arguments[$name]);
    }

    /**
     * Gets the array of InputArgument objects.
     *
     * @return InputArgument[]
     */
    public function getArguments(): array
    {
        return $this->arguments;
    }

    /**
     * Returns the number of InputArguments.
     */
    public function getArgumentCount(): int
    {
        return null !== $this->lastArrayArgument ? \PHP_INT_MAX : \count($this->arguments);
    }

    /**
     * Returns the number of required InputArguments.
     */
    public function getArgumentRequiredCount(): int
    {
        return $this->requiredCount;
    }

    /**
     * @return array<string|bool|int|float|array|null>
     */
    public function getArgumentDefaults(): array
    {
        $values = [];
        foreach ($this->arguments as $argument) {
            $values[$argument->getName()] = $argument->getDefault();
        }

        return $values;
    }

    /**
     * Sets the InputOption objects.
     *
     * @param InputOption[] $options An array of InputOption objects
     *
     * @return void
     */
    public function setOptions(array $options = [])
    {
        $this->options = [];
        $this->shortcuts = [];
        $this->negations = [];
        $this->addOptions($options);
    }

    /**
     * Adds an array of InputOption objects.
     *
     * @param InputOption[] $options An array of InputOption objects
     *
     * @return void
     */
    public function addOptions(array $options = [])
    {
        foreach ($options as $option) {
            $this->addOption($option);
        }
    }

    /**
     * @return void
     *
     * @throws LogicException When option given already exist
     */
    public function addOption(InputOption $option)
    {
        if (isset($this->options[$option->getName()]) && !$option->equals($this->options[$option->getName()])) {
<<<<<<< HEAD
            throw new LogicException(sprintf('An option named "%s" already exists.', $option->getName()));
        }
        if (isset($this->negations[$option->getName()])) {
            throw new LogicException(sprintf('An option named "%s" already exists.', $option->getName()));
=======
            throw new LogicException(\sprintf('An option named "%s" already exists.', $option->getName()));
        }
        if (isset($this->negations[$option->getName()])) {
            throw new LogicException(\sprintf('An option named "%s" already exists.', $option->getName()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($option->getShortcut()) {
            foreach (explode('|', $option->getShortcut()) as $shortcut) {
                if (isset($this->shortcuts[$shortcut]) && !$option->equals($this->options[$this->shortcuts[$shortcut]])) {
<<<<<<< HEAD
                    throw new LogicException(sprintf('An option with shortcut "%s" already exists.', $shortcut));
=======
                    throw new LogicException(\sprintf('An option with shortcut "%s" already exists.', $shortcut));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        }

        $this->options[$option->getName()] = $option;
        if ($option->getShortcut()) {
            foreach (explode('|', $option->getShortcut()) as $shortcut) {
                $this->shortcuts[$shortcut] = $option->getName();
            }
        }

        if ($option->isNegatable()) {
            $negatedName = 'no-'.$option->getName();
            if (isset($this->options[$negatedName])) {
<<<<<<< HEAD
                throw new LogicException(sprintf('An option named "%s" already exists.', $negatedName));
=======
                throw new LogicException(\sprintf('An option named "%s" already exists.', $negatedName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
            $this->negations[$negatedName] = $option->getName();
        }
    }

    /**
     * Returns an InputOption by name.
     *
     * @throws InvalidArgumentException When option given doesn't exist
     */
    public function getOption(string $name): InputOption
    {
        if (!$this->hasOption($name)) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "--%s" option does not exist.', $name));
=======
            throw new InvalidArgumentException(\sprintf('The "--%s" option does not exist.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this->options[$name];
    }

    /**
     * Returns true if an InputOption object exists by name.
     *
     * This method can't be used to check if the user included the option when
     * executing the command (use getOption() instead).
     */
    public function hasOption(string $name): bool
    {
        return isset($this->options[$name]);
    }

    /**
     * Gets the array of InputOption objects.
     *
     * @return InputOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Returns true if an InputOption object exists by shortcut.
     */
    public function hasShortcut(string $name): bool
    {
        return isset($this->shortcuts[$name]);
    }

    /**
     * Returns true if an InputOption object exists by negated name.
     */
    public function hasNegation(string $name): bool
    {
        return isset($this->negations[$name]);
    }

    /**
     * Gets an InputOption by shortcut.
     */
    public function getOptionForShortcut(string $shortcut): InputOption
    {
        return $this->getOption($this->shortcutToName($shortcut));
    }

    /**
     * @return array<string|bool|int|float|array|null>
     */
    public function getOptionDefaults(): array
    {
        $values = [];
        foreach ($this->options as $option) {
            $values[$option->getName()] = $option->getDefault();
        }

        return $values;
    }

    /**
     * Returns the InputOption name given a shortcut.
     *
     * @throws InvalidArgumentException When option given does not exist
     *
     * @internal
     */
    public function shortcutToName(string $shortcut): string
    {
        if (!isset($this->shortcuts[$shortcut])) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "-%s" option does not exist.', $shortcut));
=======
            throw new InvalidArgumentException(\sprintf('The "-%s" option does not exist.', $shortcut));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this->shortcuts[$shortcut];
    }

    /**
     * Returns the InputOption name given a negation.
     *
     * @throws InvalidArgumentException When option given does not exist
     *
     * @internal
     */
    public function negationToName(string $negation): string
    {
        if (!isset($this->negations[$negation])) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('The "--%s" option does not exist.', $negation));
=======
            throw new InvalidArgumentException(\sprintf('The "--%s" option does not exist.', $negation));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $this->negations[$negation];
    }

    /**
     * Gets the synopsis.
     */
    public function getSynopsis(bool $short = false): string
    {
        $elements = [];

        if ($short && $this->getOptions()) {
            $elements[] = '[options]';
        } elseif (!$short) {
            foreach ($this->getOptions() as $option) {
                $value = '';
                if ($option->acceptValue()) {
<<<<<<< HEAD
                    $value = sprintf(
=======
                    $value = \sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        ' %s%s%s',
                        $option->isValueOptional() ? '[' : '',
                        strtoupper($option->getName()),
                        $option->isValueOptional() ? ']' : ''
                    );
                }

<<<<<<< HEAD
                $shortcut = $option->getShortcut() ? sprintf('-%s|', $option->getShortcut()) : '';
                $negation = $option->isNegatable() ? sprintf('|--no-%s', $option->getName()) : '';
                $elements[] = sprintf('[%s--%s%s%s]', $shortcut, $option->getName(), $value, $negation);
            }
        }

        if (\count($elements) && $this->getArguments()) {
=======
                $shortcut = $option->getShortcut() ? \sprintf('-%s|', $option->getShortcut()) : '';
                $negation = $option->isNegatable() ? \sprintf('|--no-%s', $option->getName()) : '';
                $elements[] = \sprintf('[%s--%s%s%s]', $shortcut, $option->getName(), $value, $negation);
            }
        }

        if ($elements && $this->getArguments()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $elements[] = '[--]';
        }

        $tail = '';
        foreach ($this->getArguments() as $argument) {
            $element = '<'.$argument->getName().'>';
            if ($argument->isArray()) {
                $element .= '...';
            }

            if (!$argument->isRequired()) {
                $element = '['.$element;
                $tail .= ']';
            }

            $elements[] = $element;
        }

        return implode(' ', $elements).$tail;
    }
}
