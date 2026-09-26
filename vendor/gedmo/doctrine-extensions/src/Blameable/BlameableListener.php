<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Blameable;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Gedmo\AbstractTrackingListener;
<<<<<<< HEAD
use Gedmo\Exception\InvalidArgumentException;
=======
use Gedmo\Blameable\Mapping\Event\BlameableAdapter;
use Gedmo\Exception\InvalidArgumentException;
use Gedmo\Tool\ActorProviderInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * The Blameable listener handles the update of
 * dates on creation and update.
 *
<<<<<<< HEAD
=======
 * @phpstan-extends AbstractTrackingListener<array, BlameableAdapter>
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class BlameableListener extends AbstractTrackingListener
{
<<<<<<< HEAD
=======
    protected ?ActorProviderInterface $actorProvider = null;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @var mixed
     */
    protected $user;

    /**
     * Get the user value to set on a blameable field
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
     * @param BlameableAdapter      $eventAdapter
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return mixed
     */
    public function getFieldValue($meta, $field, $eventAdapter)
    {
<<<<<<< HEAD
        if ($meta->hasAssociation($field)) {
            if (null !== $this->user && !is_object($this->user)) {
                throw new InvalidArgumentException('Blame is reference, user must be an object');
            }

            return $this->user;
        }

        // ok so it's not an association, then it is a string, or an object
        if (is_object($this->user)) {
            if (method_exists($this->user, 'getUserIdentifier')) {
                return (string) $this->user->getUserIdentifier();
            }
            if (method_exists($this->user, 'getUsername')) {
                return (string) $this->user->getUsername();
            }
            if (method_exists($this->user, '__toString')) {
                return $this->user->__toString();
=======
        $actor = $this->actorProvider instanceof ActorProviderInterface ? $this->actorProvider->getActor() : $this->user;

        if ($meta->hasAssociation($field)) {
            if (null !== $actor && !is_object($actor)) {
                throw new InvalidArgumentException('Blame is reference, user must be an object');
            }

            return $actor;
        }

        // ok so it's not an association, then it is a string, or an object
        if (is_object($actor)) {
            if (method_exists($actor, 'getUserIdentifier')) {
                return (string) $actor->getUserIdentifier();
            }
            if (method_exists($actor, 'getUsername')) {
                return (string) $actor->getUsername();
            }
            if (method_exists($actor, '__toString')) {
                return $actor->__toString();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            throw new InvalidArgumentException('Field expects string, user must be a string, or object should have method getUserIdentifier, getUsername or __toString');
        }

<<<<<<< HEAD
        return $this->user;
    }

    /**
     * Set a user value to return
=======
        return $actor;
    }

    /**
     * Set an actor provider for the user value.
     */
    public function setActorProvider(ActorProviderInterface $actorProvider): void
    {
        $this->actorProvider = $actorProvider;
    }

    /**
     * Set a user value to return.
     *
     * If an actor provider is also provided, it will take precedence over this value.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @param mixed $user
     *
     * @return void
     */
    public function setUserValue($user)
    {
        $this->user = $user;
    }

    protected function getNamespace()
    {
        return __NAMESPACE__;
    }
}
