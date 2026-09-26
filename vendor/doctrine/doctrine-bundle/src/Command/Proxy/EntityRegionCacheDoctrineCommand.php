<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\ClearCache\EntityRegionCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Command to clear a entity cache region.
 *
 * @deprecated use Doctrine\ORM\Tools\Console\Command\ClearCache\EntityRegionCommand instead
 */
class EntityRegionCacheDoctrineCommand extends EntityRegionCommand
{
    use OrmProxyCommand;

    protected function configure(): void
    {
        parent::configure();

        $this
            ->setName('doctrine:cache:clear-entity-region');

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
