<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Event\Listener;

use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\Common\EventSubscriber;
use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;

<<<<<<< HEAD
use function get_class;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Reference Listener populates identities for
 * stored references
 */
final class MongoDBReferenceListener implements EventSubscriber
{
<<<<<<< HEAD
    private ReferenceRepository $referenceRepository;

    public function __construct(ReferenceRepository $referenceRepository)
    {
        $this->referenceRepository = $referenceRepository;
=======
    public function __construct(private ReferenceRepository $referenceRepository)
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscribedEvents(): array
    {
        return ['postPersist'];
    }

    /**
     * Populates identities for stored references
     */
    public function postPersist(LifecycleEventArgs $args): void
    {
        $object = $args->getDocument();

        $names = $this->referenceRepository->getReferenceNames($object);
        if ($names === false) {
            return;
        }

        foreach ($names as $name) {
            $identity = $args->getDocumentManager()
                ->getUnitOfWork()
                ->getDocumentIdentifier($object);

<<<<<<< HEAD
            $this->referenceRepository->setReferenceIdentity($name, $identity, get_class($object));
=======
            $this->referenceRepository->setReferenceIdentity($name, $identity, $object::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
