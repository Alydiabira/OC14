<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\DBAL\Tools\Console\Command\RunSqlCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use function trigger_deprecation;

=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\DBAL\Tools\Console\Command\RunSqlCommand;
use Doctrine\Deprecations\Deprecation;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Execute a SQL query and output the results.
 *
 * @deprecated use Doctrine\DBAL\Tools\Console\Command\RunSqlCommand instead
 */
class RunSqlDoctrineCommand extends RunSqlCommand
{
    protected function configure(): void
    {
        parent::configure();

        $this
            ->setName('doctrine:query:sql')
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command executes the given SQL query and
outputs the results:

<info>php %command.full_name% "SELECT * FROM users"</info>
EOT);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
<<<<<<< HEAD
        trigger_deprecation(
            'doctrine/doctrine-bundle',
            '2.2',
=======
        Deprecation::trigger(
            'doctrine/doctrine-bundle',
            'https://github.com/doctrine/DoctrineBundle/pull/1231',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'The "%s" (doctrine:query:sql) is deprecated, use dbal:run-sql command instead.',
            self::class,
        );

        return parent::execute($input, $output);
    }
}
