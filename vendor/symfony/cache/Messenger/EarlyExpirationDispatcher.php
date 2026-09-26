<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Messenger;

use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\DependencyInjection\ReverseContainer;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

/**
 * Sends the computation of cached values to a message bus.
 */
class EarlyExpirationDispatcher
{
    private MessageBusInterface $bus;
    private ReverseContainer $reverseContainer;
    private ?\Closure $callbackWrapper;

    public function __construct(MessageBusInterface $bus, ReverseContainer $reverseContainer, ?callable $callbackWrapper = null)
    {
        $this->bus = $bus;
        $this->reverseContainer = $reverseContainer;
        $this->callbackWrapper = null === $callbackWrapper ? null : $callbackWrapper(...);
    }

    /**
     * @return mixed
     */
<<<<<<< HEAD
    public function __invoke(callable $callback, CacheItem $item, bool &$save, AdapterInterface $pool, \Closure $setMetadata, ?LoggerInterface $logger = null)
=======
    public function __invoke(callable $callback, CacheItem $item, bool &$save, AdapterInterface $pool, \Closure $setMetadata, ?LoggerInterface $logger = null, ?float $beta = null)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (!$item->isHit() || null === $message = EarlyExpirationMessage::create($this->reverseContainer, $callback, $item, $pool)) {
            // The item is stale or the callback cannot be reversed: we must compute the value now
            $logger?->info('Computing item "{key}" online: '.($item->isHit() ? 'callback cannot be reversed' : 'item is stale'), ['key' => $item->getKey()]);

<<<<<<< HEAD
            return null !== $this->callbackWrapper ? ($this->callbackWrapper)($callback, $item, $save, $pool, $setMetadata, $logger) : $callback($item, $save);
=======
            return null !== $this->callbackWrapper ? ($this->callbackWrapper)($callback, $item, $save, $pool, $setMetadata, $logger, $beta) : $callback($item, $save);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $envelope = $this->bus->dispatch($message);

        if ($logger) {
            if ($envelope->last(HandledStamp::class)) {
                $logger->info('Item "{key}" was computed online', ['key' => $item->getKey()]);
            } else {
                $logger->info('Item "{key}" sent for recomputation', ['key' => $item->getKey()]);
            }
        }

        // The item's value is not stale, no need to write it to the backend
        $save = false;

        return $message->getItem()->get() ?? $item->get();
    }
}
