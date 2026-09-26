<?php

namespace Stof\DoctrineExtensionsBundle\EventListener;

use Gedmo\Translatable\TranslatableListener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
<<<<<<< HEAD
 * This listeners sets the current locale for the TranslatableListener
 *
 * @author Christophe COEVOET
 */
class LocaleListener implements EventSubscriberInterface
{
    private $translatableListener;
=======
 * This listener sets the current locale for the TranslatableListener
 *
 * @author Christophe COEVOET
 *
 * @deprecated since 1.14. Use the LocaleSynchronizer instead.
 */
class LocaleListener implements EventSubscriberInterface
{
    private TranslatableListener $translatableListener;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(TranslatableListener $translatableListener)
    {
        $this->translatableListener = $translatableListener;
    }

    /**
     * @internal
     */
<<<<<<< HEAD
    public function onKernelRequest(RequestEvent $event)
=======
    public function onKernelRequest(RequestEvent $event): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->translatableListener->setTranslatableLocale($event->getRequest()->getLocale());
    }

    /**
<<<<<<< HEAD
     * @return string[]
     */
    public static function getSubscribedEvents()
=======
     * @return array<string, string>
     */
    public static function getSubscribedEvents(): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return array(
            KernelEvents::REQUEST => 'onKernelRequest',
        );
    }
}
