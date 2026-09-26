<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ExceptionDataCollector extends DataCollector
{
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
    {
        if (null !== $exception) {
            $this->data = [
                'exception' => FlattenException::createWithDataRepresentation($exception),
            ];
        }
    }

    public function hasException(): bool
    {
        return isset($this->data['exception']);
    }

    public function getException(): \Exception|FlattenException
    {
        return $this->data['exception'];
    }

    public function getMessage(): string
    {
        return $this->data['exception']->getMessage();
    }

<<<<<<< HEAD
    public function getCode(): int
=======
    public function getCode(): int|string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->data['exception']->getCode();
    }

    public function getStatusCode(): int
    {
        return $this->data['exception']->getStatusCode();
    }

    public function getTrace(): array
    {
        return $this->data['exception']->getTrace();
    }

    public function getName(): string
    {
        return 'exception';
    }
}
