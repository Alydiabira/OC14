<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

use Doctrine\ORM\EntityManagerInterface;

final class MultipleTransactionORMExecutor extends AbstractExecutor
{
    use ORMExecutorCommon;

    /** @inheritDoc */
<<<<<<< HEAD
    public function execute(array $fixtures, $append = false): void
=======
    public function execute(array $fixtures, bool $append = false): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $executor = $this;
        if ($append === false) {
            $this->em->wrapInTransaction(static fn () => $executor->purge());
        }

        foreach ($fixtures as $fixture) {
            $this->em->wrapInTransaction(static fn (EntityManagerInterface $em) => $executor->load($em, $fixture));
        }
    }
}
