<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Orm;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\EntityManagerProvider;
use Doctrine\Persistence\ManagerRegistry;
use RuntimeException;

<<<<<<< HEAD
use function get_class;
=======
use function get_debug_type;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function sprintf;

final class ManagerRegistryAwareEntityManagerProvider implements EntityManagerProvider
{
<<<<<<< HEAD
    private ManagerRegistry $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
=======
    public function __construct(
        private readonly ManagerRegistry $managerRegistry,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getDefaultManager(): EntityManagerInterface
    {
        return $this->getManager($this->managerRegistry->getDefaultManagerName());
    }

    public function getManager(string $name): EntityManagerInterface
    {
        $em = $this->managerRegistry->getManager($name);

        if ($em instanceof EntityManagerInterface) {
            return $em;
        }

        throw new RuntimeException(
            sprintf(
                'Only managers of type "%s" are supported. Instance of "%s given.',
                EntityManagerInterface::class,
<<<<<<< HEAD
                get_class($em),
=======
                get_debug_type($em),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ),
        );
    }
}
