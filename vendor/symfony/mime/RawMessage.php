<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime;

use Symfony\Component\Mime\Exception\LogicException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RawMessage
{
<<<<<<< HEAD
    private iterable|string $message;
    private bool $isGeneratorClosed;

    public function __construct(iterable|string $message)
=======
    /** @var iterable<string>|string|resource */
    private $message;
    private bool $isGeneratorClosed;

    /**
     * @param iterable<string>|string|resource $message
     */
    public function __construct(mixed $message)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->message = $message;
    }

<<<<<<< HEAD
=======
    public function __destruct()
    {
        if (\is_resource($this->message)) {
            fclose($this->message);
        }
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function toString(): string
    {
        if (\is_string($this->message)) {
            return $this->message;
        }

<<<<<<< HEAD
=======
        if (\is_resource($this->message)) {
            return stream_get_contents($this->message, -1, 0);
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $message = '';
        foreach ($this->message as $chunk) {
            $message .= $chunk;
        }

        return $this->message = $message;
    }

    public function toIterable(): iterable
    {
        if ($this->isGeneratorClosed ?? false) {
            trigger_deprecation('symfony/mime', '6.4', 'Sending an email with a closed generator is deprecated and will throw in 7.0.');
            // throw new LogicException('Unable to send the email as its generator is already closed.');
        }

        if (\is_string($this->message)) {
            yield $this->message;

            return;
        }

<<<<<<< HEAD
        if ($this->message instanceof \Generator) {
            $message = '';
            foreach ($this->message as $chunk) {
                $message .= $chunk;
=======
        if (\is_resource($this->message)) {
            rewind($this->message);
            while (false !== $line = fgets($this->message)) {
                yield $line;
            }

            return;
        }

        if ($this->message instanceof \Generator) {
            $message = fopen('php://temp', 'w+');
            foreach ($this->message as $chunk) {
                fwrite($message, $chunk);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                yield $chunk;
            }
            $this->isGeneratorClosed = !$this->message->valid();
            $this->message = $message;

            return;
        }

        foreach ($this->message as $chunk) {
            yield $chunk;
        }
    }

    /**
     * @return void
     *
     * @throws LogicException if the message is not valid
     */
    public function ensureValidity()
    {
    }

    public function __serialize(): array
    {
        return [$this->toString()];
    }

    public function __unserialize(array $data): void
    {
        [$this->message] = $data;
    }
}
