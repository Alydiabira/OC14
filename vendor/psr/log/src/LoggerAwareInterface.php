<?php

namespace Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
<<<<<<< HEAD
     *
     * @param LoggerInterface $logger
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function setLogger(LoggerInterface $logger): void;
}
