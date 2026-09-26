<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\RuntimeException;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * Handles the IsGranted attribute on controllers.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class IsGrantedAttributeListener implements EventSubscriberInterface
{
    public function __construct(
        private readonly AuthorizationCheckerInterface $authChecker,
        private ?ExpressionLanguage $expressionLanguage = null,
    ) {
    }

    /**
     * @return void
     */
    public function onKernelControllerArguments(ControllerArgumentsEvent $event)
    {
        /** @var IsGranted[] $attributes */
        if (!\is_array($attributes = $event->getAttributes()[IsGranted::class] ?? null)) {
            return;
        }

        $request = $event->getRequest();
        $arguments = $event->getNamedArguments();

        foreach ($attributes as $attribute) {
            $subject = null;

            if ($subjectRef = $attribute->subject) {
                if (\is_array($subjectRef)) {
                    foreach ($subjectRef as $refKey => $ref) {
                        $subject[\is_string($refKey) ? $refKey : (string) $ref] = $this->getIsGrantedSubject($ref, $request, $arguments);
                    }
                } else {
                    $subject = $this->getIsGrantedSubject($subjectRef, $request, $arguments);
                }
            }

            if (!$this->authChecker->isGranted($attribute->attribute, $subject)) {
<<<<<<< HEAD
                $message = $attribute->message ?: sprintf('Access Denied by #[IsGranted(%s)] on controller', $this->getIsGrantedString($attribute));
=======
                $message = $attribute->message ?: \sprintf('Access Denied by #[IsGranted(%s)] on controller', $this->getIsGrantedString($attribute));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                if ($statusCode = $attribute->statusCode) {
                    throw new HttpException($statusCode, $message, code: $attribute->exceptionCode ?? 0);
                }

                $accessDeniedException = new AccessDeniedException($message, code: $attribute->exceptionCode ?? 403);
                $accessDeniedException->setAttributes($attribute->attribute);
                $accessDeniedException->setSubject($subject);

                throw $accessDeniedException;
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::CONTROLLER_ARGUMENTS => ['onKernelControllerArguments', 20]];
    }

    private function getIsGrantedSubject(string|Expression $subjectRef, Request $request, array $arguments): mixed
    {
        if ($subjectRef instanceof Expression) {
            $this->expressionLanguage ??= new ExpressionLanguage();

            return $this->expressionLanguage->evaluate($subjectRef, [
                'request' => $request,
                'args' => $arguments,
            ]);
        }

        if (!\array_key_exists($subjectRef, $arguments)) {
<<<<<<< HEAD
            throw new RuntimeException(sprintf('Could not find the subject "%s" for the #[IsGranted] attribute. Try adding a "$%s" argument to your controller method.', $subjectRef, $subjectRef));
=======
            throw new RuntimeException(\sprintf('Could not find the subject "%s" for the #[IsGranted] attribute. Try adding a "$%s" argument to your controller method.', $subjectRef, $subjectRef));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $arguments[$subjectRef];
    }

    private function getIsGrantedString(IsGranted $isGranted): string
    {
<<<<<<< HEAD
        $processValue = fn ($value) => sprintf($value instanceof Expression ? 'new Expression("%s")' : '"%s"', $value);
=======
        $processValue = static fn ($value) => \sprintf($value instanceof Expression ? 'new Expression("%s")' : '"%s"', $value);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $argsString = $processValue($isGranted->attribute);

        if (null !== $subject = $isGranted->subject) {
<<<<<<< HEAD
            $subject = !\is_array($subject) ? $processValue($subject) : array_map(function ($key, $value) use ($processValue) {
                $value = $processValue($value);

                return \is_string($key) ? sprintf('"%s" => %s', $key, $value) : $value;
=======
            $subject = !\is_array($subject) ? $processValue($subject) : array_map(static function ($key, $value) use ($processValue) {
                $value = $processValue($value);

                return \is_string($key) ? \sprintf('"%s" => %s', $key, $value) : $value;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }, array_keys($subject), $subject);

            $argsString .= ', '.(!\is_array($subject) ? $subject : '['.implode(', ', $subject).']');
        }

        return $argsString;
    }
}
