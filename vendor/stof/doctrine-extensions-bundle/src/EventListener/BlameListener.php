<?php

namespace Stof\DoctrineExtensionsBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\HttpKernelInterface;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Gedmo\Blameable\BlameableListener;

/**
 * Sets the username from the security context by listening on kernel.request
 *
 * @author David Buchmann <mail@davidbu.ch>
<<<<<<< HEAD
 */
class BlameListener implements EventSubscriberInterface
{
    private $authorizationChecker;
    private $tokenStorage;
    private $blameableListener;

    public function __construct(BlameableListener $blameableListener, TokenStorageInterface $tokenStorage = null, AuthorizationCheckerInterface $authorizationChecker = null)
=======
 *
 * @deprecated to be removed in 2.0, use the actor provider instead
 */
class BlameListener implements EventSubscriberInterface
{
    private ?AuthorizationCheckerInterface $authorizationChecker;
    private ?TokenStorageInterface $tokenStorage;
    private BlameableListener $blameableListener;

    public function __construct(BlameableListener $blameableListener, ?TokenStorageInterface $tokenStorage = null, ?AuthorizationCheckerInterface $authorizationChecker = null)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->blameableListener = $blameableListener;
        $this->tokenStorage = $tokenStorage;
        $this->authorizationChecker = $authorizationChecker;
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
        if (!$event->isMainRequest()) {
            return;
        }

        if (null === $this->tokenStorage || null === $this->authorizationChecker) {
            return;
        }

        $token = $this->tokenStorage->getToken();
        if (null !== $token && $this->authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $this->blameableListener->setUserValue($token->getUser());
        }
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
