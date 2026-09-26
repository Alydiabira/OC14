<?php

namespace Doctrine\DBAL\Exception;

/**
 * Exception for a deadlock error of a transaction detected in the driver.
<<<<<<< HEAD
 *
 * @psalm-immutable
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class DeadlockException extends ServerException implements RetryableException
{
}
