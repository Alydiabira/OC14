<?php

declare(strict_types=1);

namespace Doctrine\ORM\Tools\Event;

<<<<<<< HEAD
=======
use BadMethodCallException;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Common\EventArgs;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManagerInterface;

<<<<<<< HEAD
=======
use function method_exists;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Event Args used for the Events::postGenerateSchema event.
 *
 * @link        www.doctrine-project.com
 */
class GenerateSchemaEventArgs extends EventArgs
{
    public function __construct(
        private readonly EntityManagerInterface $em,
<<<<<<< HEAD
        private readonly Schema $schema,
=======
        private Schema $schema,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }

    public function getEntityManager(): EntityManagerInterface
    {
        return $this->em;
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }
<<<<<<< HEAD
=======

    public function setSchema(Schema $schema): void
    {
        // @phpstan-ignore function.impossibleType (Checking for unreleased Schema::edit() API)
        if (! method_exists(Schema::class, 'edit')) {
            throw new BadMethodCallException(
                'The setSchema() method requires the DBAL Schema::edit() API which is not available in the current DBAL version. '
                . 'This feature requires doctrine/dbal ^4.5 or higher.',
            );
        }

        $this->schema = $schema;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
