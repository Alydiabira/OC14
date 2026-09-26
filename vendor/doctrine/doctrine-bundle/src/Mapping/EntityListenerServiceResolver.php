<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Mapping\EntityListenerResolver;

interface EntityListenerServiceResolver extends EntityListenerResolver
{
    /**
     * @param string $className
     * @param string $serviceId
     */
    // phpcs:ignore
    public function registerService($className, $serviceId);
}
