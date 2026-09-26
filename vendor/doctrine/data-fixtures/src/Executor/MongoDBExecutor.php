<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

use Doctrine\Common\DataFixtures\Event\Listener\MongoDBReferenceListener;
<<<<<<< HEAD
use Doctrine\Common\DataFixtures\Purger\MongoDBPurger;
=======
use Doctrine\Common\DataFixtures\Purger\MongoDBPurgerInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\ODM\MongoDB\DocumentManager;

/**
 * Class responsible for executing data fixtures.
 */
<<<<<<< HEAD
class MongoDBExecutor extends AbstractExecutor
{
    private DocumentManager $dm;
=======
final class MongoDBExecutor extends AbstractExecutor
{
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private MongoDBReferenceListener $listener;

    /**
     * Construct new fixtures loader instance.
     *
     * @param DocumentManager $dm DocumentManager instance used for persistence.
     */
<<<<<<< HEAD
    public function __construct(DocumentManager $dm, ?MongoDBPurger $purger = null)
    {
        $this->dm = $dm;
=======
    public function __construct(private DocumentManager $dm, MongoDBPurgerInterface|null $purger = null)
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($purger !== null) {
            $this->purger = $purger;
            $this->purger->setDocumentManager($dm);
        }

        parent::__construct($dm);

        $this->listener = new MongoDBReferenceListener($this->referenceRepository);
        $dm->getEventManager()->addEventSubscriber($this->listener);
    }

    /**
     * Retrieve the DocumentManager instance this executor instance is using.
<<<<<<< HEAD
     *
     * @return DocumentManager
     */
    public function getObjectManager()
=======
     */
    public function getObjectManager(): DocumentManager
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->dm;
    }

<<<<<<< HEAD
    /** @inheritDoc */
    public function setReferenceRepository(ReferenceRepository $referenceRepository)
=======
    public function setReferenceRepository(ReferenceRepository $referenceRepository): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->dm->getEventManager()->removeEventListener(
            $this->listener->getSubscribedEvents(),
            $this->listener,
        );

        $this->referenceRepository = $referenceRepository;
        $this->listener            = new MongoDBReferenceListener($this->referenceRepository);
        $this->dm->getEventManager()->addEventSubscriber($this->listener);
    }

    /** @inheritDoc */
<<<<<<< HEAD
    public function execute(array $fixtures, $append = false)
=======
    public function execute(array $fixtures, bool $append = false): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ($append === false) {
            $this->purge();
        }

        foreach ($fixtures as $fixture) {
            $this->load($this->dm, $fixture);
        }
    }
}
