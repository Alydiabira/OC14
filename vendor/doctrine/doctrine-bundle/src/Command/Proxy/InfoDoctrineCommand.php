<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\InfoCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * Show information about mapped entities
 *
 * @deprecated use Doctrine\ORM\Tools\Console\Command\InfoCommand instead
 */
class InfoDoctrineCommand extends InfoCommand
{
    use OrmProxyCommand;

    protected function configure(): void
    {
        $this
            ->setName('doctrine:mapping:info');

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
