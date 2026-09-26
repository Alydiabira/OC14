<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

<<<<<<< HEAD
use Doctrine\Common\DataFixtures\Purger\PHPCRPurger;
=======
use Doctrine\Common\DataFixtures\Purger\PHPCRPurgerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ODM\PHPCR\DocumentManagerInterface;

use function method_exists;

/**
 * Class responsible for executing data fixtures.
 */
<<<<<<< HEAD
class PHPCRExecutor extends AbstractExecutor
{
    private DocumentManagerInterface $dm;

    /**
     * @param DocumentManagerInterface $dm     manager instance used for persisting the fixtures
     * @param PHPCRPurger|null         $purger to remove the current data if append is false
     */
    public function __construct(DocumentManagerInterface $dm, ?PHPCRPurger $purger = null)
    {
        parent::__construct($dm);

        $this->dm = $dm;
=======
final class PHPCRExecutor extends AbstractExecutor
{
    /**
     * @param DocumentManagerInterface  $dm     manager instance used for persisting the fixtures
     * @param PHPCRPurgerInterface|null $purger to remove the current data if append is false
     */
    public function __construct(private DocumentManagerInterface $dm, PHPCRPurgerInterface|null $purger = null)
    {
        parent::__construct($dm);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($purger === null) {
            return;
        }

        $purger->setDocumentManager($dm);
        $this->setPurger($purger);
    }

<<<<<<< HEAD
    /** @return DocumentManagerInterface */
    public function getObjectManager()
=======
    public function getObjectManager(): DocumentManagerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->dm;
    }

    /** @inheritDoc */
<<<<<<< HEAD
    public function execute(array $fixtures, $append = false)
    {
        $that = $this;

        $function = static function ($dm) use ($append, $that, $fixtures) {
=======
    public function execute(array $fixtures, bool $append = false): void
    {
        $that = $this;

        $function = static function ($dm) use ($append, $that, $fixtures): void {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($append === false) {
                $that->purge();
            }

            foreach ($fixtures as $fixture) {
                $that->load($dm, $fixture);
            }
        };

        if (method_exists($this->dm, 'transactional')) {
            $this->dm->transactional($function);
        } else {
            $function($this->dm);
        }
    }
}
