<?php

namespace Vich\UploaderBundle\Mapping\Annotation;

use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Vich\UploaderBundle\Mapping\AnnotationInterface;

/**
 * UploadableField.
 *
 * @Annotation
 * @Target({"PROPERTY"})
 * @NamedArgumentConstructor
 *
<<<<<<< HEAD
=======
 * @deprecated since 2.9, use Vich\UploaderBundle\Mapping\Attribute\UploadableField instead
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class UploadableField implements AnnotationInterface
{
<<<<<<< HEAD
    /**
     * Constructs a new instance of UploadableField.
     */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(
        private readonly string $mapping,
        private readonly ?string $fileNameProperty = null,
        private readonly ?string $size = null,
        private readonly ?string $mimeType = null,
        private readonly ?string $originalName = null,
        private readonly ?string $dimensions = null
    ) {
<<<<<<< HEAD
=======
        trigger_deprecation('vich/uploader-bundle', '2.9', 'The "Vich\UploaderBundle\Mapping\Annotation\UploadableField" class is deprecated, use "Vich\UploaderBundle\Mapping\Attribute\UploadableField" instead.');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Gets the mapping name.
     *
     * @return string The mapping name
     */
    public function getMapping(): string
    {
        return $this->mapping;
    }

    /**
     * Gets the file name property.
     *
     * @return string|null The file name property
     */
    public function getFileNameProperty(): ?string
    {
        return $this->fileNameProperty;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getOriginalName(): ?string
    {
        return $this->originalName;
    }

    public function getDimensions(): ?string
    {
        return $this->dimensions;
    }
}
