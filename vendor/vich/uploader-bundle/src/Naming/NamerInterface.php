<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
<<<<<<< HEAD
 * NamerInterface.
 *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Dustin Dobervich <ddobervich@gmail.com>
 *
 * @phpstan-template T of object
 */
interface NamerInterface
{
    /**
     * Creates a name for the file being uploaded.
<<<<<<< HEAD
     *
     * @param object          $object  The object the upload is attached to
     * @param PropertyMapping $mapping The mapping to use to manipulate the given object
     *
     * @return string The file name
     *
     * @phpstan-param T $object
=======
     * Important: this method will be changed to accept object|array for $object,
     *            please use it like that in your implementation.
     *
     * @param object|array    $object  The object or array the upload is attached to
     * @param PropertyMapping $mapping The mapping to use to manipulate the given object
     *
     * @phpstan-param T $object
     *
     * @return string The file name
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function name(object $object, PropertyMapping $mapping): string;
}
