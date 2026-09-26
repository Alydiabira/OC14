<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class responsible for executing data fixtures.
 */
<<<<<<< HEAD
class ORMExecutor extends AbstractExecutor
=======
final class ORMExecutor extends AbstractExecutor
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    use ORMExecutorCommon;

    /** @inheritDoc */
<<<<<<< HEAD
    public function execute(array $fixtures, $append = false)
    {
        $executor = $this;
        $this->em->wrapInTransaction(static function (EntityManagerInterface $em) use ($executor, $fixtures, $append) {
=======
    public function execute(array $fixtures, bool $append = false): void
    {
        $executor = $this;
        $this->em->wrapInTransaction(static function (EntityManagerInterface $em) use ($executor, $fixtures, $append): void {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($append === false) {
                $executor->purge();
            }

            foreach ($fixtures as $fixture) {
                $executor->load($em, $fixture);
            }
        });
    }
}
