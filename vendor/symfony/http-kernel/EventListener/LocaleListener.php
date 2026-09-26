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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RequestContextAwareInterface;

/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class LocaleListener implements EventSubscriberInterface
{
    private ?RequestContextAwareInterface $router;
    private string $defaultLocale;
    private RequestStack $requestStack;
    private bool $useAcceptLanguageHeader;
    private array $enabledLocales;

    public function __construct(RequestStack $requestStack, string $defaultLocale = 'en', ?RequestContextAwareInterface $router = null, bool $useAcceptLanguageHeader = false, array $enabledLocales = [])
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->router = $router;
        $this->useAcceptLanguageHeader = $useAcceptLanguageHeader;
<<<<<<< HEAD
        $this->enabledLocales = $enabledLocales;
=======
        $this->enabledLocales = $enabledLocales ? array_values(array_unique(array_merge([$defaultLocale], $enabledLocales))) : [];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function setDefaultLocale(KernelEvent $event): void
    {
        $event->getRequest()->setDefaultLocale($this->defaultLocale);
<<<<<<< HEAD
=======
        $this->setRouterLocale($this->defaultLocale);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();

        $this->setLocale($request);
<<<<<<< HEAD
        $this->setRouterContext($request);
=======
        $this->setRouterLocale($request->getLocale());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function onKernelFinishRequest(FinishRequestEvent $event): void
    {
<<<<<<< HEAD
        if (null !== $parentRequest = $this->requestStack->getParentRequest()) {
            $this->setRouterContext($parentRequest);
        }
=======
        $this->setRouterLocale($this->requestStack->getParentRequest()?->getLocale() ?? $this->defaultLocale);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function setLocale(Request $request): void
    {
        if ($locale = $request->attributes->get('_locale')) {
            $request->setLocale($locale);
        } elseif ($this->useAcceptLanguageHeader) {
            if ($request->getLanguages() && $preferredLanguage = $request->getPreferredLanguage($this->enabledLocales)) {
                $request->setLocale($preferredLanguage);
            }
            $request->attributes->set('_vary_by_language', true);
        }
    }

<<<<<<< HEAD
    private function setRouterContext(Request $request): void
    {
        $this->router?->getContext()->setParameter('_locale', $request->getLocale());
=======
    private function setRouterLocale(string $locale): void
    {
        $this->router?->getContext()->setParameter('_locale', $locale);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [
                ['setDefaultLocale', 100],
                // must be registered after the Router to have access to the _locale
                ['onKernelRequest', 16],
            ],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
}
