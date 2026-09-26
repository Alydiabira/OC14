<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Pipes;

use Symfony\Component\Process\Exception\InvalidArgumentException;

/**
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
abstract class AbstractPipes implements PipesInterface
{
    public array $pipes = [];

    private string $inputBuffer = '';
    /** @var resource|string|\Iterator */
    private $input;
    private bool $blocked = true;
    private ?string $lastError = null;

    /**
     * @param resource|string|\Iterator $input
     */
    public function __construct($input)
    {
        if (\is_resource($input) || $input instanceof \Iterator) {
            $this->input = $input;
        } else {
            $this->inputBuffer = (string) $input;
        }
    }

    public function close(): void
    {
        foreach ($this->pipes as $pipe) {
            if (\is_resource($pipe)) {
                fclose($pipe);
            }
        }
        $this->pipes = [];
    }

    /**
     * Returns true if a system call has been interrupted.
<<<<<<< HEAD
=======
     *
     * stream_select() returns false when the `select` system call is interrupted by an incoming signal.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected function hasSystemCallBeenInterrupted(): bool
    {
        $lastError = $this->lastError;
        $this->lastError = null;

<<<<<<< HEAD
        // stream_select returns false when the `select` system call is interrupted by an incoming signal
        return null !== $lastError && false !== stripos($lastError, 'interrupted system call');
=======
        if (null === $lastError) {
            return false;
        }

        if (false !== stripos($lastError, 'interrupted system call')) {
            return true;
        }

        // on applications with a different locale than english, the message above is not found because
        // it's translated. So we also check for the SOCKET_EINTR constant which is defined under
        // Windows and UNIX-like platforms (if available on the platform).
        return \defined('SOCKET_EINTR') && str_starts_with($lastError, 'stream_select(): Unable to select ['.\SOCKET_EINTR.']');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Unblocks streams.
     */
    protected function unblock(): void
    {
        if (!$this->blocked) {
            return;
        }

        foreach ($this->pipes as $pipe) {
<<<<<<< HEAD
            stream_set_blocking($pipe, 0);
        }
        if (\is_resource($this->input)) {
            stream_set_blocking($this->input, 0);
=======
            stream_set_blocking($pipe, false);
        }
        if (\is_resource($this->input)) {
            stream_set_blocking($this->input, false);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->blocked = false;
    }

    /**
     * Writes input to stdin.
     *
     * @throws InvalidArgumentException When an input iterator yields a non supported value
     */
    protected function write(): ?array
    {
        if (!isset($this->pipes[0])) {
            return null;
        }
        $input = $this->input;

        if ($input instanceof \Iterator) {
            if (!$input->valid()) {
                $input = null;
            } elseif (\is_resource($input = $input->current())) {
<<<<<<< HEAD
                stream_set_blocking($input, 0);
            } elseif (!isset($this->inputBuffer[0])) {
                if (!\is_string($input)) {
                    if (!\is_scalar($input)) {
                        throw new InvalidArgumentException(sprintf('"%s" yielded a value of type "%s", but only scalars and stream resources are supported.', get_debug_type($this->input), get_debug_type($input)));
=======
                stream_set_blocking($input, false);
            } elseif (!isset($this->inputBuffer[0])) {
                if (!\is_string($input)) {
                    if (!\is_scalar($input)) {
                        throw new InvalidArgumentException(\sprintf('"%s" yielded a value of type "%s", but only scalars and stream resources are supported.', get_debug_type($this->input), get_debug_type($input)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }
                    $input = (string) $input;
                }
                $this->inputBuffer = $input;
                $this->input->next();
                $input = null;
            } else {
                $input = null;
            }
        }

        $r = $e = [];
        $w = [$this->pipes[0]];

        // let's have a look if something changed in streams
        if (false === @stream_select($r, $w, $e, 0, 0)) {
            return null;
        }

        foreach ($w as $stdin) {
            if (isset($this->inputBuffer[0])) {
<<<<<<< HEAD
                $written = fwrite($stdin, $this->inputBuffer);
                $this->inputBuffer = substr($this->inputBuffer, $written);
                if (isset($this->inputBuffer[0])) {
=======
                if (false === $written = @fwrite($stdin, $this->inputBuffer)) {
                    return $this->closeBrokenInputPipe();
                }
                $this->inputBuffer = substr($this->inputBuffer, $written);
                if (isset($this->inputBuffer[0]) && isset($this->pipes[0])) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    return [$this->pipes[0]];
                }
            }

            if ($input) {
                while (true) {
                    $data = fread($input, self::CHUNK_SIZE);
                    if (!isset($data[0])) {
                        break;
                    }
<<<<<<< HEAD
                    $written = fwrite($stdin, $data);
=======
                    if (false === $written = @fwrite($stdin, $data)) {
                        return $this->closeBrokenInputPipe();
                    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $data = substr($data, $written);
                    if (isset($data[0])) {
                        $this->inputBuffer = $data;

<<<<<<< HEAD
                        return [$this->pipes[0]];
=======
                        return isset($this->pipes[0]) ? [$this->pipes[0]] : null;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }
                }
                if (feof($input)) {
                    if ($this->input instanceof \Iterator) {
                        $this->input->next();
                    } else {
                        $this->input = null;
                    }
                }
            }
        }

        // no input to read on resource, buffer is empty
        if (!isset($this->inputBuffer[0]) && !($this->input instanceof \Iterator ? $this->input->valid() : $this->input)) {
            $this->input = null;
            fclose($this->pipes[0]);
            unset($this->pipes[0]);
<<<<<<< HEAD
        } elseif (!$w) {
=======
        } elseif (!$w || $this->hasReadyInput()) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            return [$this->pipes[0]];
        }

        return null;
    }

    /**
<<<<<<< HEAD
=======
     * Tells whether the next chunk of input can be written without waiting.
     */
    private function hasReadyInput(): bool
    {
        if (!$this->input instanceof \Iterator || !$this->input->valid()) {
            return false;
        }

        $input = $this->input->current();

        return \is_scalar($input) && '' !== (string) $input;
    }

    private function closeBrokenInputPipe(): void
    {
        $this->lastError = error_get_last()['message'] ?? null;
        if (\is_resource($this->pipes[0] ?? null)) {
            fclose($this->pipes[0]);
        }
        unset($this->pipes[0]);

        $this->input = null;
        $this->inputBuffer = '';
    }

    /**
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @internal
     */
    public function handleError(int $type, string $msg): void
    {
        $this->lastError = $msg;
    }
}
