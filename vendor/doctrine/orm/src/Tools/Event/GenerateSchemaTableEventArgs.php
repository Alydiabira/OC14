<?php

declare(strict_types=1);

namespace Doctrine\ORM\Tools\Event;

<<<<<<< HEAD
=======
use BadMethodCallException;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Common\EventArgs;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\Table;
use Doctrine\ORM\Mapping\ClassMetadata;

<<<<<<< HEAD
=======
use function method_exists;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Event Args used for the Events::postGenerateSchemaTable event.
 *
 * @link        www.doctrine-project.com
 */
class GenerateSchemaTableEventArgs extends EventArgs
{
<<<<<<< HEAD
    public function __construct(
        private readonly ClassMetadata $classMetadata,
        private readonly Schema $schema,
        private readonly Table $classTable,
=======
    private bool $classTableWasMutated = false;

    public function __construct(
        private readonly ClassMetadata $classMetadata,
        private Schema $schema,
        private Table $classTable,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
    }

    public function getClassMetadata(): ClassMetadata
    {
        return $this->classMetadata;
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }

    public function getClassTable(): Table
    {
        return $this->classTable;
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

    public function setClassTable(Table $classTable): void
    {
        // @phpstan-ignore function.impossibleType (Checking for unreleased Schema::edit() API)
        if (! method_exists(Schema::class, 'edit')) {
            throw new BadMethodCallException(
                'The setClassTable() method requires the DBAL Schema::edit() API which is not available in the current DBAL version. '
                . 'This feature requires doctrine/dbal ^4.5 or higher.',
            );
        }

        $this->classTable           = $classTable;
        $this->classTableWasMutated = true;
    }

    public function classTableWasMutated(): bool
    {
        return $this->classTableWasMutated;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
