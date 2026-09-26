<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\Command;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Command;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\Persistence\ManagerRegistry;
use InvalidArgumentException;
use Symfony\Component\Console\Command\Command;

<<<<<<< HEAD
=======
use function assert;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Base class for Doctrine console commands to extend from.
 *
 * @internal
 */
abstract class DoctrineCommand extends Command
{
<<<<<<< HEAD
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        parent::__construct();

        $this->doctrine = $doctrine;
=======
    public function __construct(
        private readonly ManagerRegistry $doctrine,
    ) {
        parent::__construct();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * get a doctrine entity generator
     *
     * @return EntityGenerator
<<<<<<< HEAD
     *
     * @psalm-suppress UndefinedDocblockClass ORM < 3 specific
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected function getEntityGenerator()
    {
        $entityGenerator = new EntityGenerator();
        $entityGenerator->setGenerateAnnotations(false);
        $entityGenerator->setGenerateStubMethods(true);
        $entityGenerator->setRegenerateEntityIfExists(false);
        $entityGenerator->setUpdateEntityIfExists(true);
        $entityGenerator->setNumSpaces(4);
        $entityGenerator->setAnnotationPrefix('ORM\\');

        return $entityGenerator;
    }

    /**
     * Get a doctrine entity manager by symfony name.
     *
     * @param string   $name
     * @param int|null $shardId
     *
<<<<<<< HEAD
     * @return EntityManager
=======
     * @return EntityManagerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected function getEntityManager($name, $shardId = null)
    {
        $manager = $this->getDoctrine()->getManager($name);

        if ($shardId !== null) {
            throw new InvalidArgumentException('Shards are not supported anymore using doctrine/dbal >= 3');
        }

<<<<<<< HEAD
=======
        assert($manager instanceof EntityManagerInterface);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $manager;
    }

    /**
     * Get a doctrine dbal connection by symfony name.
     *
     * @param string $name
     *
     * @return Connection
     */
    protected function getDoctrineConnection($name)
    {
        return $this->getDoctrine()->getConnection($name);
    }

    /** @return ManagerRegistry */
    protected function getDoctrine()
    {
        return $this->doctrine;
    }
}
