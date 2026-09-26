<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Exception;

/**
 * This exception is thrown when a circular reference is detected.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceCircularReferenceException extends RuntimeException
{
    private string $serviceId;
    private array $path;

    public function __construct(string $serviceId, array $path, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        parent::__construct(sprintf('Circular reference detected for service "%s", path: "%s".', $serviceId, implode(' -> ', $path)), 0, $previous);
=======
        parent::__construct(\sprintf('Circular reference detected for service "%s", path: "%s".', $serviceId, implode(' -> ', $path)), 0, $previous);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->serviceId = $serviceId;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @return array
     */
    public function getPath()
    {
        return $this->path;
    }
}
