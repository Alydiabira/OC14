<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Contracts\Translation\LocaleAwareInterface;

/**
 * Pass the current locale to the provided services.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class LocaleAwareListener implements EventSubscriberInterface
{
    private iterable $localeAwareServices;
    private RequestStack $requestStack;
<<<<<<< HEAD
=======
    private array $storedLocales = [];
    private array $initializedServices = [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * @param iterable<mixed, LocaleAwareInterface> $localeAwareServices
     */
    public function __construct(iterable $localeAwareServices, RequestStack $requestStack)
    {
        $this->localeAwareServices = $localeAwareServices;
        $this->requestStack = $requestStack;
    }

    public function onKernelRequest(RequestEvent $event): void
    {
<<<<<<< HEAD
=======
        if (!$event->isMainRequest()) {
            $locales = [];

            foreach ($this->localeAwareServices as $key => $service) {
                // a service the listener never set can hold no locale to restore
                if (isset($this->initializedServices[$key])) {
                    $locales[$key] = $service->getLocale();
                }
            }

            $this->storedLocales[spl_object_id($event->getRequest())] = $locales;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->setLocale($event->getRequest()->getLocale(), $event->getRequest()->getDefaultLocale());
    }

    public function onKernelFinishRequest(FinishRequestEvent $event): void
    {
<<<<<<< HEAD
=======
        $storedLocales = $this->storedLocales[$id = spl_object_id($event->getRequest())] ?? [];
        unset($this->storedLocales[$id]);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (null === $parentRequest = $this->requestStack->getParentRequest()) {
            foreach ($this->localeAwareServices as $service) {
                $service->setLocale($event->getRequest()->getDefaultLocale());
            }

            return;
        }

<<<<<<< HEAD
        $this->setLocale($parentRequest->getLocale(), $parentRequest->getDefaultLocale());
=======
        $this->setLocale($parentRequest->getLocale(), $parentRequest->getDefaultLocale(), $storedLocales);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function getSubscribedEvents(): array
    {
        return [
            // must be registered after the Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 15]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', -15]],
        ];
    }

<<<<<<< HEAD
    private function setLocale(string $locale, string $defaultLocale): void
    {
        foreach ($this->localeAwareServices as $service) {
            try {
                $service->setLocale($locale);
            } catch (\InvalidArgumentException) {
                $service->setLocale($defaultLocale);
            }
=======
    private function setLocale(string $locale, string $defaultLocale, array $storedLocales = []): void
    {
        foreach ($this->localeAwareServices as $key => $service) {
            try {
                $service->setLocale($storedLocales[$key] ?? $locale);
            } catch (\InvalidArgumentException) {
                $service->setLocale($defaultLocale);
            }

            $this->initializedServices[$key] = true;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
