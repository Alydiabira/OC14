<?php

<<<<<<< HEAD
namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

=======
declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Command\Proxy;

use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\EntityManagerProvider;
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use Symfony\Bundle\FrameworkBundle\Console\Application;

use function assert;
<<<<<<< HEAD
use function trigger_deprecation;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 *
 * @deprecated since DoctrineBundle 2.7 and will be removed in 3.0
 */
abstract class DoctrineCommandHelper
{
    /**
     * Convenience method to push the helper sets of a given entity manager into the application.
     *
     * @param string $emName
     */
    public static function setApplicationEntityManager(Application $application, $emName)
    {
        $em = $application->getKernel()->getContainer()->get('doctrine')->getManager($emName);
        assert($em instanceof EntityManagerInterface);
        $helperSet = $application->getHelperSet();
<<<<<<< HEAD
        /** @psalm-suppress InvalidArgument ORM < 3 specific */
        $helperSet->set(new EntityManagerHelper($em), 'em');

        trigger_deprecation(
            'doctrine/doctrine-bundle',
            '2.7',
            'Providing an EntityManager using "%s" is deprecated. Use an instance of "%s" instead.',
=======
        /* @phpstan-ignore class.notFound, argument.type (ORM < 3 specific) */
        $helperSet->set(new EntityManagerHelper($em), 'em');

        Deprecation::trigger(
            'doctrine/doctrine-bundle',
            'https://github.com/doctrine/DoctrineBundle/pull/1513',
            'Providing an EntityManager using "%s" is deprecated. Use an instance of "%s" instead.',
            /* @phpstan-ignore class.notFound */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            EntityManagerHelper::class,
            EntityManagerProvider::class,
        );
    }
}
