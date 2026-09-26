<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Messenger;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Middleware\StackInterface;

/**
 * Middleware to log when transaction has been left open.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class DoctrineOpenTransactionLoggerMiddleware extends AbstractDoctrineMiddleware
{
    private bool $isHandling = false;

    public function __construct(
        ManagerRegistry $managerRegistry,
        ?string $entityManagerName = null,
        private readonly ?LoggerInterface $logger = null,
    ) {
        parent::__construct($managerRegistry, $entityManagerName);
    }

    protected function handleForManager(EntityManagerInterface $entityManager, Envelope $envelope, StackInterface $stack): Envelope
    {
        if ($this->isHandling) {
            return $stack->next()->handle($envelope, $stack);
        }

        $this->isHandling = true;
<<<<<<< HEAD
=======
        $initialTransactionLevel = $entityManager->getConnection()->getTransactionNestingLevel();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        try {
            return $stack->next()->handle($envelope, $stack);
        } finally {
<<<<<<< HEAD
            if ($entityManager->getConnection()->isTransactionActive()) {
=======
            if ($entityManager->getConnection()->getTransactionNestingLevel() > $initialTransactionLevel) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $this->logger?->error('A handler opened a transaction but did not close it.', [
                    'message' => $envelope->getMessage(),
                ]);
            }
            $this->isHandling = false;
        }
    }
}
