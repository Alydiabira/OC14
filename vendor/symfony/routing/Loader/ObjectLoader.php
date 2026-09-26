<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\Routing\RouteCollection;

/**
 * A route loader that calls a method on an object to load the routes.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
abstract class ObjectLoader extends Loader
{
    /**
     * Returns the object that the method will be called on to load routes.
     *
     * For example, if your application uses a service container,
     * the $id may be a service id.
     */
    abstract protected function getObject(string $id): object;

    /**
     * Calls the object method that will load the routes.
     */
    public function load(mixed $resource, ?string $type = null): RouteCollection
    {
        if (!preg_match('/^[^\:]+(?:::(?:[^\:]+))?$/', $resource)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Invalid resource "%s" passed to the %s route loader: use the format "object_id::method" or "object_id" if your object class has an "__invoke" method.', $resource, \is_string($type) ? '"'.$type.'"' : 'object'));
=======
            throw new \InvalidArgumentException(\sprintf('Invalid resource "%s" passed to the %s route loader: use the format "object_id::method" or "object_id" if your object class has an "__invoke" method.', $resource, \is_string($type) ? '"'.$type.'"' : 'object'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $parts = explode('::', $resource);
        $method = $parts[1] ?? '__invoke';

        $loaderObject = $this->getObject($parts[0]);

        if (!\is_object($loaderObject)) {
<<<<<<< HEAD
            throw new \TypeError(sprintf('"%s:getObject()" must return an object: "%s" returned.', static::class, get_debug_type($loaderObject)));
        }

        if (!\is_callable([$loaderObject, $method])) {
            throw new \BadMethodCallException(sprintf('Method "%s" not found on "%s" when importing routing resource "%s".', $method, get_debug_type($loaderObject), $resource));
=======
            throw new \TypeError(\sprintf('"%s:getObject()" must return an object: "%s" returned.', static::class, get_debug_type($loaderObject)));
        }

        if (!\is_callable([$loaderObject, $method])) {
            throw new \BadMethodCallException(\sprintf('Method "%s" not found on "%s" when importing routing resource "%s".', $method, get_debug_type($loaderObject), $resource));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $routeCollection = $loaderObject->$method($this, $this->env);

        if (!$routeCollection instanceof RouteCollection) {
            $type = get_debug_type($routeCollection);

<<<<<<< HEAD
            throw new \LogicException(sprintf('The "%s::%s()" method must return a RouteCollection: "%s" returned.', get_debug_type($loaderObject), $method, $type));
=======
            throw new \LogicException(\sprintf('The "%s::%s()" method must return a RouteCollection: "%s" returned.', get_debug_type($loaderObject), $method, $type));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // make the object file tracked so that if it changes, the cache rebuilds
        $this->addClassResource(new \ReflectionClass($loaderObject), $routeCollection);

        return $routeCollection;
    }

    private function addClassResource(\ReflectionClass $class, RouteCollection $collection): void
    {
        do {
            if (is_file($class->getFileName())) {
                $collection->addResource(new FileResource($class->getFileName()));
            }
        } while ($class = $class->getParentClass());
    }
}
