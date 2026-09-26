<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Driver;

use Throwable;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
interface Exception extends Throwable
{
    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred.
     *
     * Returns null if the driver does not provide a SQLSTATE for the error occurred.
     *
     * @return string|null
     */
    public function getSQLState();
}
