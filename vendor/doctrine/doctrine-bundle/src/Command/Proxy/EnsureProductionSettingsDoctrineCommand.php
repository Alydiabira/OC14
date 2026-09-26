<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Ensure the Doctrine ORM is configured properly for a production environment.
 *
 * @deprecated use Doctrine\ORM\Tools\Console\Command\EnsureProductionSettingsCommand instead
 *
 * @psalm-suppress UndefinedClass ORM < 3 specific
 */
class EnsureProductionSettingsDoctrineCommand extends EnsureProductionSettingsCommand
{
    use OrmProxyCommand;

    protected function configure(): void
    {
        parent::configure();

        $this
            ->setName('doctrine:ensure-production-settings');

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
