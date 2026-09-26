<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Closure;
use Monolog\Level;
use Monolog\Logger;
use Monolog\ResettableInterface;
use Monolog\Formatter\FormatterInterface;
use Psr\Log\LogLevel;
use Monolog\LogRecord;

/**
 * Simple handler wrapper that filters records based on a list of levels
 *
 * It can be configured with an exact list of levels to allow, or a min/max level.
 *
 * @author Hennadiy Verkh
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class FilterHandler extends Handler implements ProcessableHandlerInterface, ResettableInterface, FormattableHandlerInterface
{
    use ProcessableHandlerTrait;

    /**
     * Handler or factory Closure($record, $this)
     *
     * @phpstan-var (Closure(LogRecord|null, HandlerInterface): HandlerInterface)|HandlerInterface
     */
    protected Closure|HandlerInterface $handler;

    /**
     * Minimum level for logs that are passed to handler
     *
     * @var bool[] Map of Level value => true
     * @phpstan-var array<value-of<Level::VALUES>, true>
     */
    protected array $acceptedLevels;

    /**
     * Whether the messages that are handled can bubble up the stack or not
     */
    protected bool $bubble;

    /**
     * @phpstan-param (Closure(LogRecord|null, HandlerInterface): HandlerInterface)|HandlerInterface $handler
     *
<<<<<<< HEAD
     * @param Closure|HandlerInterface                                                 $handler        Handler or factory Closure($record|null, $filterHandler).
     * @param int|string|Level|array<int|string|Level|LogLevel::*> $minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
     * @param int|string|Level|LogLevel::*                                   $maxLevel       Maximum level to accept, only used if $minLevelOrList is not an array
     * @param bool                                                                     $bubble         Whether the messages that are handled can bubble up the stack or not
=======
     * @param Closure|HandlerInterface                             $handler        Handler or factory Closure($record|null, $filterHandler).
     * @param int|string|Level|array<int|string|Level|LogLevel::*> $minLevelOrList A list of levels to accept or a minimum level if maxLevel is provided
     * @param int|string|Level|LogLevel::*                         $maxLevel       Maximum level to accept, only used if $minLevelOrList is not an array
     * @param bool                                                 $bubble         Whether the messages that are handled can bubble up the stack or not
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::*|array<value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::*> $minLevelOrList
     * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::* $maxLevel
     */
    public function __construct(Closure|HandlerInterface $handler, int|string|Level|array $minLevelOrList = Level::Debug, int|string|Level $maxLevel = Level::Emergency, bool $bubble = true)
    {
        $this->handler  = $handler;
        $this->bubble   = $bubble;
        $this->setAcceptedLevels($minLevelOrList, $maxLevel);
    }

    /**
     * @phpstan-return list<Level> List of levels
     */
    public function getAcceptedLevels(): array
    {
        return array_map(fn (int $level) => Level::from($level), array_keys($this->acceptedLevels));
    }

    /**
<<<<<<< HEAD
     * @param int|string|Level|LogLevel::*|array<int|string|Level|LogLevel::*> $minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
     * @param int|string|Level|LogLevel::*                                               $maxLevel       Maximum level or level name to accept, only used if $minLevelOrList is not an array
=======
     * @param  int|string|Level|LogLevel::*|array<int|string|Level|LogLevel::*> $minLevelOrList A list of levels to accept or a minimum level or level name if maxLevel is provided
     * @param  int|string|Level|LogLevel::*                                     $maxLevel       Maximum level or level name to accept, only used if $minLevelOrList is not an array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return $this
     *
     * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::*|array<value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::*> $minLevelOrList
     * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::* $maxLevel
     */
    public function setAcceptedLevels(int|string|Level|array $minLevelOrList = Level::Debug, int|string|Level $maxLevel = Level::Emergency): self
    {
<<<<<<< HEAD
        if (is_array($minLevelOrList)) {
=======
        if (\is_array($minLevelOrList)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $acceptedLevels = array_map(Logger::toMonologLevel(...), $minLevelOrList);
        } else {
            $minLevelOrList = Logger::toMonologLevel($minLevelOrList);
            $maxLevel = Logger::toMonologLevel($maxLevel);
            $acceptedLevels = array_values(array_filter(Level::cases(), fn (Level $level) => $level->value >= $minLevelOrList->value && $level->value <= $maxLevel->value));
        }
        $this->acceptedLevels = [];
        foreach ($acceptedLevels as $level) {
            $this->acceptedLevels[$level->value] = true;
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isHandling(LogRecord $record): bool
    {
        return isset($this->acceptedLevels[$record->level->value]);
    }

    /**
     * @inheritDoc
     */
    public function handle(LogRecord $record): bool
    {
        if (!$this->isHandling($record)) {
            return false;
        }

        if (\count($this->processors) > 0) {
            $record = $this->processRecord($record);
        }

        $this->getHandler($record)->handle($record);

        return false === $this->bubble;
    }

    /**
     * @inheritDoc
     */
    public function handleBatch(array $records): void
    {
        $filtered = [];
        foreach ($records as $record) {
            if ($this->isHandling($record)) {
                $filtered[] = $record;
            }
        }

<<<<<<< HEAD
        if (count($filtered) > 0) {
            $this->getHandler($filtered[count($filtered) - 1])->handleBatch($filtered);
=======
        if (\count($filtered) > 0) {
            $this->getHandler($filtered[\count($filtered) - 1])->handleBatch($filtered);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    /**
     * Return the nested handler
     *
     * If the handler was provided as a factory, this will trigger the handler's instantiation.
     */
    public function getHandler(LogRecord|null $record = null): HandlerInterface
    {
        if (!$this->handler instanceof HandlerInterface) {
            $handler = ($this->handler)($record, $this);
            if (!$handler instanceof HandlerInterface) {
                throw new \RuntimeException("The factory Closure should return a HandlerInterface");
            }
            $this->handler = $handler;
        }

        return $this->handler;
    }

    /**
     * @inheritDoc
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
        $handler = $this->getHandler();
        if ($handler instanceof FormattableHandlerInterface) {
            $handler->setFormatter($formatter);

            return $this;
        }

<<<<<<< HEAD
        throw new \UnexpectedValueException('The nested handler of type '.get_class($handler).' does not support formatters.');
=======
        throw new \UnexpectedValueException('The nested handler of type '.\get_class($handler).' does not support formatters.');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @inheritDoc
     */
    public function getFormatter(): FormatterInterface
    {
        $handler = $this->getHandler();
        if ($handler instanceof FormattableHandlerInterface) {
            return $handler->getFormatter();
        }

<<<<<<< HEAD
        throw new \UnexpectedValueException('The nested handler of type '.get_class($handler).' does not support formatters.');
=======
        throw new \UnexpectedValueException('The nested handler of type '.\get_class($handler).' does not support formatters.');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function reset(): void
    {
        $this->resetProcessors();

        if ($this->getHandler() instanceof ResettableInterface) {
            $this->getHandler()->reset();
        }
    }
}
