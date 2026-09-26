<?php

declare(strict_types=1);

namespace Doctrine\ORM\Event;

use Doctrine\Common\EventArgs;
<<<<<<< HEAD
use Doctrine\Common\EventManager;
=======
use Doctrine\Common\EventDispatcher;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\EntityListenerResolver;

/**
 * A method invoker based on entity lifecycle.
 */
class ListenersInvoker
{
    final public const INVOKE_NONE      = 0;
    final public const INVOKE_LISTENERS = 1;
    final public const INVOKE_CALLBACKS = 2;
    final public const INVOKE_MANAGER   = 4;

    /** The Entity listener resolver. */
    private readonly EntityListenerResolver $resolver;

<<<<<<< HEAD
    /** The EventManager used for dispatching events. */
    private readonly EventManager $eventManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->eventManager = $em->getEventManager();
        $this->resolver     = $em->getConfiguration()->getEntityListenerResolver();
=======
    /** The EventDispatcher used for dispatching events. */
    private readonly EventDispatcher $eventDispatcher;

    public function __construct(EntityManagerInterface $em)
    {
        $this->eventDispatcher = $em->getEventManager();
        $this->resolver        = $em->getConfiguration()->getEntityListenerResolver();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Get the subscribed event systems
     *
     * @param ClassMetadata $metadata  The entity metadata.
     * @param string        $eventName The entity lifecycle event.
     *
<<<<<<< HEAD
     * @psalm-return int-mask-of<self::INVOKE_*> Bitmask of subscribed event systems.
=======
     * @phpstan-return int-mask-of<self::INVOKE_*> Bitmask of subscribed event systems.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getSubscribedSystems(ClassMetadata $metadata, string $eventName): int
    {
        $invoke = self::INVOKE_NONE;

        if (isset($metadata->lifecycleCallbacks[$eventName])) {
            $invoke |= self::INVOKE_CALLBACKS;
        }

        if (isset($metadata->entityListeners[$eventName])) {
            $invoke |= self::INVOKE_LISTENERS;
        }

<<<<<<< HEAD
        if ($this->eventManager->hasListeners($eventName)) {
=======
        if ($this->eventDispatcher->hasListeners($eventName)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $invoke |= self::INVOKE_MANAGER;
        }

        return $invoke;
    }

    /**
     * Dispatches the lifecycle event of the given entity.
     *
     * @param ClassMetadata $metadata  The entity metadata.
     * @param string        $eventName The entity lifecycle event.
     * @param object        $entity    The Entity on which the event occurred.
     * @param EventArgs     $event     The Event args.
<<<<<<< HEAD
     * @psalm-param int-mask-of<self::INVOKE_*> $invoke Bitmask to invoke listeners.
=======
     * @phpstan-param int-mask-of<self::INVOKE_*> $invoke Bitmask to invoke listeners.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function invoke(
        ClassMetadata $metadata,
        string $eventName,
        object $entity,
        EventArgs $event,
        int $invoke,
    ): void {
        if ($invoke & self::INVOKE_CALLBACKS) {
            foreach ($metadata->lifecycleCallbacks[$eventName] as $callback) {
                $entity->$callback($event);
            }
        }

        if ($invoke & self::INVOKE_LISTENERS) {
            foreach ($metadata->entityListeners[$eventName] as $listener) {
                $class    = $listener['class'];
                $method   = $listener['method'];
                $instance = $this->resolver->resolve($class);

                $instance->$method($entity, $event);
            }
        }

        if ($invoke & self::INVOKE_MANAGER) {
<<<<<<< HEAD
            $this->eventManager->dispatchEvent($eventName, $event);
=======
            $this->eventDispatcher->dispatchEvent($eventName, $event);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
