<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Command to clear the metadata cache of the various cache drivers.
 *
 * @deprecated use Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand instead
 */
class ClearMetadataCacheDoctrineCommand extends MetadataCommand
{
    use OrmProxyCommand;

    protected function configure(): void
    {
        parent::configure();

        $this
            ->setName('doctrine:cache:clear-metadata')
            ->setDescription('Clears all metadata cache for an entity manager');

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
