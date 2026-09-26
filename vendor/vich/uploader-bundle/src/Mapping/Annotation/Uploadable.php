<?php

namespace Vich\UploaderBundle\Mapping\Annotation;

use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Vich\UploaderBundle\Mapping\AnnotationInterface;

/**
 * Uploadable.
 *
 * @Annotation
 * @Target({"CLASS"})
 * @NamedArgumentConstructor
 *
<<<<<<< HEAD
=======
 * @deprecated since 2.9, use Vich\UploaderBundle\Mapping\Attribute\Uploadable instead
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Uploadable implements AnnotationInterface
{
<<<<<<< HEAD
=======
    public function __construct()
    {
        trigger_deprecation('vich/uploader-bundle', '2.9', 'The "Vich\UploaderBundle\Mapping\Annotation\Uploadable" class is deprecated, use "Vich\UploaderBundle\Mapping\Attribute\Uploadable" instead.');
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
