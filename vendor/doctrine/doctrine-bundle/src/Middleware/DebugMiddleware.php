<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Middleware;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\Middleware;
use Symfony\Bridge\Doctrine\Middleware\Debug\DebugDataHolder;
use Symfony\Bridge\Doctrine\Middleware\Debug\Driver;
use Symfony\Component\Stopwatch\Stopwatch;

class DebugMiddleware implements Middleware, ConnectionNameAwareInterface
{
<<<<<<< HEAD
    private DebugDataHolder $debugDataHolder;
    private ?Stopwatch $stopwatch;
    private string $connectionName = 'default';

    public function __construct(DebugDataHolder $debugDataHolder, ?Stopwatch $stopwatch)
    {
        $this->debugDataHolder = $debugDataHolder;
        $this->stopwatch       = $stopwatch;
=======
    private string $connectionName = 'default';

    public function __construct(
        private readonly DebugDataHolder $debugDataHolder,
        private readonly Stopwatch|null $stopwatch,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function setConnectionName(string $name): void
    {
        $this->connectionName = $name;
    }

    public function wrap(DriverInterface $driver): DriverInterface
    {
<<<<<<< HEAD
        /** @psalm-suppress InternalClass,InternalMethod */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return new Driver($driver, $this->debugDataHolder, $this->stopwatch, $this->connectionName);
    }
}
