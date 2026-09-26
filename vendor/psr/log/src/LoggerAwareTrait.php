<?php

namespace Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
<<<<<<< HEAD
     *
     * @var LoggerInterface|null
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected ?LoggerInterface $logger = null;

    /**
     * Sets a logger.
<<<<<<< HEAD
     *
     * @param LoggerInterface $logger
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
