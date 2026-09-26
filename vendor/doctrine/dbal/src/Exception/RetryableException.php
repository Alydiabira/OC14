<?php

namespace Doctrine\DBAL\Exception;

use Throwable;

/**
 * Marker interface for all exceptions where retrying the transaction makes sense.
<<<<<<< HEAD
 *
 * @psalm-immutable
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface RetryableException extends Throwable
{
}
