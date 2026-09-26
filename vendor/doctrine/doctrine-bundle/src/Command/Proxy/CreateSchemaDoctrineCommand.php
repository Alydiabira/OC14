<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Command to execute the SQL needed to generate the database schema for
 * a given entity manager.
 *
 * @deprecated use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand instead
 */
class CreateSchemaDoctrineCommand extends CreateCommand
{
    use OrmProxyCommand;

    protected function configure(): void
    {
        parent::configure();

        $this
            ->setName('doctrine:schema:create')
            ->setDescription('Executes (or dumps) the SQL needed to generate the database schema');

        if ($this->getDefinition()->hasOption('em')) {
            return;
        }

<<<<<<< HEAD
        $this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
=======
        $this->addOption('em', null, InputOption::VALUE_REQUIRED, 'The entity manager to use for this command');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
