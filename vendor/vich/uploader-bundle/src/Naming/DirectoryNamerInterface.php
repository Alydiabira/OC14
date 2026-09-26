<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * NamerInterface.
 *
 * @author Kevin bond <kevinbond@gmail.com>
 *
 * @phpstan-template T of object
 */
interface DirectoryNamerInterface
{
    /**
     * Creates a directory name for the file being uploaded.
     *
     * @param object|array    $object  The object or array the upload is attached to
     * @param PropertyMapping $mapping The mapping to use to manipulate the given object
     *
<<<<<<< HEAD
     * @return string The directory name
     *
     * @phpstan-param T $object
=======
     * @phpstan-param T $object
     *
     * @return string The directory name
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function directoryName(object|array $object, PropertyMapping $mapping): string;
}
