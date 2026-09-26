<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Tools\Console\ConnectionProvider;
use Doctrine\Persistence\AbstractManagerRegistry;

class ManagerRegistryAwareConnectionProvider implements ConnectionProvider
{
<<<<<<< HEAD
    private AbstractManagerRegistry $managerRegistry;

    public function __construct(AbstractManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
=======
    public function __construct(
        private readonly AbstractManagerRegistry $managerRegistry,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getDefaultConnection(): Connection
    {
        return $this->managerRegistry->getConnection();
    }

    public function getConnection(string $name): Connection
    {
        return $this->managerRegistry->getConnection($name);
    }
}
