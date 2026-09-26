<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Vich\UploaderBundle\Mapping;

use Vich\UploaderBundle\Exception\MappingNotFoundException;

interface PropertyMappingResolverInterface
{
    /**
     * Creates the property mapping from the read annotation and configured mapping.
     *
     * @param object|array $obj         The object
     * @param string       $fieldName   The field name
     * @param array        $mappingData The mapping data
     *
     * @return PropertyMapping The property mapping
     *
     * @throws \LogicException
     * @throws MappingNotFoundException
     */
    public function resolve(object|array $obj, string $fieldName, array $mappingData): PropertyMapping;
}
