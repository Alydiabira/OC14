<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Filter\SQLFilter;

/**
 * Configurator for an EntityManager
 */
class ManagerConfigurator
{
<<<<<<< HEAD
    /** @var string[] */
    private array $enabledFilters = [];

    /** @var array<string,array<string,string>> */
    private array $filtersParameters = [];

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @param string[]                           $enabledFilters
     * @param array<string,array<string,string>> $filtersParameters
     */
<<<<<<< HEAD
    public function __construct(array $enabledFilters, array $filtersParameters)
    {
        $this->enabledFilters    = $enabledFilters;
        $this->filtersParameters = $filtersParameters;
=======
    public function __construct(
        private readonly array $enabledFilters = [],
        private readonly array $filtersParameters = [],
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Create a connection by name.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function configure(EntityManagerInterface $entityManager)
    {
        $this->enableFilters($entityManager);
    }

    /**
     * Enables filters for a given entity manager
     */
    private function enableFilters(EntityManagerInterface $entityManager): void
    {
        if (empty($this->enabledFilters)) {
            return;
        }

        $filterCollection = $entityManager->getFilters();
        foreach ($this->enabledFilters as $filter) {
            $this->setFilterParameters($filter, $filterCollection->enable($filter));
        }
    }

    /**
     * Sets default parameters for a given filter
     */
    private function setFilterParameters(string $name, SQLFilter $filter): void
    {
        if (empty($this->filtersParameters[$name])) {
            return;
        }

        $parameters = $this->filtersParameters[$name];
        foreach ($parameters as $paramName => $paramValue) {
            $filter->setParameter($paramName, $paramValue);
        }
    }
}
