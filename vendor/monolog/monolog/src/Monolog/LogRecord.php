<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog;

use ArrayAccess;

/**
 * Monolog log record
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
<<<<<<< HEAD
 * @template-implements ArrayAccess<'message'|'level'|'context'|'level_name'|'channel'|'datetime'|'extra', int|string|\DateTimeImmutable|array<mixed>>
=======
 * @template-implements ArrayAccess<'message'|'level'|'context'|'level_name'|'channel'|'datetime'|'extra'|'formatted', int|string|\DateTimeImmutable|array<mixed>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class LogRecord implements ArrayAccess
{
    private const MODIFIABLE_FIELDS = [
        'extra' => true,
        'formatted' => true,
    ];

    public function __construct(
        public readonly \DateTimeImmutable $datetime,
        public readonly string $channel,
        public readonly Level $level,
        public readonly string $message,
        /** @var array<mixed> */
        public readonly array $context = [],
        /** @var array<mixed> */
        public array $extra = [],
        public mixed $formatted = null,
    ) {
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset === 'extra') {
<<<<<<< HEAD
            if (!is_array($value)) {
=======
            if (!\is_array($value)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                throw new \InvalidArgumentException('extra must be an array');
            }

            $this->extra = $value;

            return;
        }

        if ($offset === 'formatted') {
            $this->formatted = $value;

            return;
        }

        throw new \LogicException('Unsupported operation: setting '.$offset);
    }

    public function offsetExists(mixed $offset): bool
    {
        if ($offset === 'level_name') {
            return true;
        }

        return isset($this->{$offset});
    }

    public function offsetUnset(mixed $offset): void
    {
        throw new \LogicException('Unsupported operation');
    }

    public function &offsetGet(mixed $offset): mixed
    {
<<<<<<< HEAD
        if ($offset === 'level_name' || $offset === 'level') {
            // avoid returning readonly props by ref as this is illegal
            if ($offset === 'level_name') {
                $copy = $this->level->getName();
            } else {
                $copy = $this->level->value;
            }
=======
        // handle special cases for the level enum
        if ($offset === 'level_name') {
            // avoid returning readonly props by ref as this is illegal
            $copy = $this->level->getName();

            return $copy;
        }
        if ($offset === 'level') {
            // avoid returning readonly props by ref as this is illegal
            $copy = $this->level->value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return $copy;
        }

        if (isset(self::MODIFIABLE_FIELDS[$offset])) {
            return $this->{$offset};
        }

        // avoid returning readonly props by ref as this is illegal
        $copy = $this->{$offset};

        return $copy;
    }

    /**
     * @phpstan-return array{message: string, context: mixed[], level: value-of<Level::VALUES>, level_name: value-of<Level::NAMES>, channel: string, datetime: \DateTimeImmutable, extra: mixed[]}
     */
    public function toArray(): array
    {
        return [
            'message' => $this->message,
            'context' => $this->context,
            'level' => $this->level->value,
            'level_name' => $this->level->getName(),
            'channel' => $this->channel,
            'datetime' => $this->datetime,
            'extra' => $this->extra,
        ];
    }

    public function with(mixed ...$args): self
    {
        foreach (['message', 'context', 'level', 'channel', 'datetime', 'extra'] as $prop) {
            $args[$prop] ??= $this->{$prop};
        }

        return new self(...$args);
    }
}
