<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\SchemaListener;

use Doctrine\ORM\Tools\Event\GenerateSchemaEventArgs;
use Symfony\Bridge\Doctrine\Security\RememberMe\DoctrineTokenProvider;
use Symfony\Component\Security\Http\RememberMe\PersistentRememberMeHandler;
use Symfony\Component\Security\Http\RememberMe\RememberMeHandlerInterface;

/**
 * Automatically adds the rememberme table needed for the {@see DoctrineTokenProvider}.
 */
class RememberMeTokenProviderDoctrineSchemaListener extends AbstractSchemaListener
{
    /**
     * @param iterable<mixed, RememberMeHandlerInterface> $rememberMeHandlers
     */
    public function __construct(
        private readonly iterable $rememberMeHandlers,
    ) {
    }

    public function postGenerateSchema(GenerateSchemaEventArgs $event): void
    {
        $connection = $event->getEntityManager()->getConnection();
<<<<<<< HEAD
=======
        $schema = $event->getSchema();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach ($this->rememberMeHandlers as $rememberMeHandler) {
            if (
                $rememberMeHandler instanceof PersistentRememberMeHandler
                && ($tokenProvider = $rememberMeHandler->getTokenProvider()) instanceof DoctrineTokenProvider
            ) {
<<<<<<< HEAD
                $tokenProvider->configureSchema($event->getSchema(), $connection, $this->getIsSameDatabaseChecker($connection));
            }
        }
=======
                $isSameDatabaseChecker = $this->getIsSameDatabaseChecker($connection);
                $schema = $this->filterSchemaChanges($schema, $connection, static fn () => $tokenProvider->configureSchema($schema, $connection, $isSameDatabaseChecker)) ?? $schema;
            }
        }

        if (method_exists($schema, 'edit') && method_exists($event, 'setSchema')) {
            $event->setSchema($schema);
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
