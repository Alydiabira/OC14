<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Mapping\Driver;

<<<<<<< HEAD
=======
use Doctrine\Common\Annotations\Reader;
use Gedmo\Mapping\Driver;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @internal
 */
<<<<<<< HEAD
interface AttributeDriverInterface extends AnnotationDriverInterface
{
=======
interface AttributeDriverInterface extends Driver
{
    /**
     * Set the annotation reader instance
     *
     * When originally implemented, `Doctrine\Common\Annotations\Reader` was not available,
     * therefore this method may accept any object implementing these methods from the interface:
     *
     *     getClassAnnotations([reflectionClass])
     *     getClassAnnotation([reflectionClass], [name])
     *     getPropertyAnnotations([reflectionProperty])
     *     getPropertyAnnotation([reflectionProperty], [name])
     *
     * @param Reader|AttributeReader|object $reader
     *
     * @return void
     *
     * @note Providing any object is deprecated, as of 4.0 an {@see AttributeReader} will be required
     */
    public function setAnnotationReader($reader);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
