<?php

declare(strict_types=1);

namespace Doctrine\Common;

<<<<<<< HEAD
use function spl_object_hash;
=======
use function spl_object_id;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * The EventManager is the central point of Doctrine's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 */
<<<<<<< HEAD
class EventManager
=======
class EventManager implements EventManagerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    /**
     * Map of registered listeners.
     * <event> => <listeners>
     *
     * @var array<string, object[]>
     */
    private array $listeners = [];

<<<<<<< HEAD
    /**
     * Dispatches an event to all registered listeners.
     *
     * @param string         $eventName The name of the event to dispatch. The name of the event is
     *                                  the name of the method that is invoked on listeners.
     * @param EventArgs|null $eventArgs The event arguments to pass to the event handlers/listeners.
     *                                  If not supplied, the single empty EventArgs instance is used.
     */
=======
    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function dispatchEvent(string $eventName, EventArgs|null $eventArgs = null): void
    {
        if (! isset($this->listeners[$eventName])) {
            return;
        }

        $eventArgs ??= EventArgs::getEmptyInstance();

        foreach ($this->listeners[$eventName] as $listener) {
            $listener->$eventName($eventArgs);
        }
    }

<<<<<<< HEAD
    /**
     * Gets the listeners of a specific event.
     *
     * @param string $event The name of the event.
     *
     * @return object[]
     */
=======
    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getListeners(string $event): array
    {
        return $this->listeners[$event] ?? [];
    }

<<<<<<< HEAD
    /**
     * Gets all listeners keyed by event name.
     *
     * @return array<string, object[]> The event listeners for the specified event, or all event listeners.
     */
=======
    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getAllListeners(): array
    {
        return $this->listeners;
    }

<<<<<<< HEAD
    /**
     * Checks whether an event has any registered listeners.
     */
=======
    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function hasListeners(string $event): bool
    {
        return ! empty($this->listeners[$event]);
    }

<<<<<<< HEAD
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string|string[] $events   The event(s) to listen on.
     * @param object          $listener The listener object.
     */
    public function addEventListener(string|array $events, object $listener): void
    {
        // Picks the hash code related to that listener
        $hash = spl_object_hash($listener);
=======
    /** {@inheritDoc} */
    public function addEventListener(string|array $events, object $listener): void
    {
        // Picks the hash code related to that listener
        $oid = spl_object_id($listener);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach ((array) $events as $event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
<<<<<<< HEAD
            $this->listeners[$event][$hash] = $listener;
        }
    }

    /**
     * Removes an event listener from the specified events.
     *
     * @param string|string[] $events
     */
    public function removeEventListener(string|array $events, object $listener): void
    {
        // Picks the hash code related to that listener
        $hash = spl_object_hash($listener);

        foreach ((array) $events as $event) {
            unset($this->listeners[$event][$hash]);
        }
    }

    /**
     * Adds an EventSubscriber.
     *
     * The subscriber is asked for all the events it is interested in and added
     * as a listener for these events.
     */
=======
            $this->listeners[$event][$oid] = $listener;
        }
    }

    /** {@inheritDoc} */
    public function removeEventListener(string|array $events, object $listener): void
    {
        // Picks the hash code related to that listener
        $oid = spl_object_id($listener);

        foreach ((array) $events as $event) {
            unset($this->listeners[$event][$oid]);
        }
    }

    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function addEventSubscriber(EventSubscriber $subscriber): void
    {
        $this->addEventListener($subscriber->getSubscribedEvents(), $subscriber);
    }

<<<<<<< HEAD
    /**
     * Removes an EventSubscriber.
     *
     * The subscriber is asked for all the events it is interested in and removed
     * as a listener for these events.
     */
=======
    /** {@inheritDoc} */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function removeEventSubscriber(EventSubscriber $subscriber): void
    {
        $this->removeEventListener($subscriber->getSubscribedEvents(), $subscriber);
    }
}
