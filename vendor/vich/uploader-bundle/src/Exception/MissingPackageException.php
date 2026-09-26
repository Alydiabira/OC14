<?php

namespace Vich\UploaderBundle\Exception;

final class MissingPackageException extends \RuntimeException implements VichUploaderExceptionInterface
{
<<<<<<< HEAD
    public function __construct(string $message = '', \Throwable $previous = null)
=======
    public function __construct(string $message = '', ?\Throwable $previous = null)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        parent::__construct($message, 0, $previous);
    }
}
