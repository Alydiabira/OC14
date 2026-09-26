<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Tools\Console\EntityManagerProvider;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

<<<<<<< HEAD
use function trigger_deprecation;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * @internal
 * @deprecated
 */
trait OrmProxyCommand
{
<<<<<<< HEAD
    private ?EntityManagerProvider $entityManagerProvider;

    public function __construct(?EntityManagerProvider $entityManagerProvider = null)
    {
        parent::__construct($entityManagerProvider);

        $this->entityManagerProvider = $entityManagerProvider;

        trigger_deprecation(
            'doctrine/doctrine-bundle',
            '2.8',
=======
    public function __construct(
        private readonly EntityManagerProvider|null $entityManagerProvider = null,
    ) {
        parent::__construct($entityManagerProvider);

        Deprecation::trigger(
            'doctrine/doctrine-bundle',
            'https://github.com/doctrine/DoctrineBundle/pull/1581',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'Class "%s" is deprecated. Use "%s" instead.',
            self::class,
            parent::class,
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (! $this->entityManagerProvider) {
<<<<<<< HEAD
=======
            /* @phpstan-ignore argument.type (ORM < 3 specific) */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            DoctrineCommandHelper::setApplicationEntityManager($this->getApplication(), $input->getOption('em'));
        }

        return parent::execute($input, $output);
    }
}
