<?php

namespace Vich\UploaderBundle\Naming;

use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Vich\UploaderBundle\Exception\NameGenerationException;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Util\Transliterator;

/**
<<<<<<< HEAD
 * PropertyNamer.
 *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
final class PropertyNamer implements NamerInterface, ConfigurableInterface
{
    use Polyfill\FileExtensionTrait;

<<<<<<< HEAD
    /**
     * @var string
     */
    private $propertyPath;

    private bool $transliterate = false;

=======
    private string $propertyPath;

    private bool $transliterate = false;

    private bool $keepExtension = false;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function __construct(private readonly Transliterator $transliterator)
    {
    }

    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - property: path to the property used to name the file. Can be either an attribute or a method.
     *                       - transliterate: whether the filename should be transliterated or not
<<<<<<< HEAD
=======
     *                       - keep_extension: whether to keep the original extension or use smart logic
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws \InvalidArgumentException
     */
    public function configure(array $options): void
    {
        if (empty($options['property'])) {
            throw new \InvalidArgumentException('Option "property" is missing or empty.');
        }

        $this->propertyPath = $options['property'];
        $this->transliterate = isset($options['transliterate']) ? (bool) $options['transliterate'] : $this->transliterate;
<<<<<<< HEAD
    }

    public function name(object $object, PropertyMapping $mapping): string
=======
        $this->keepExtension = isset($options['keep_extension']) ? (bool) $options['keep_extension'] : $this->keepExtension;
    }

    public function name(object|array $object, PropertyMapping $mapping): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (empty($this->propertyPath)) {
            throw new \LogicException('The property to use can not be determined. Did you call the configure() method?');
        }

        $file = $mapping->getFile($object);

        try {
            $name = $this->getPropertyValue($object, $this->propertyPath);
        } catch (NoSuchPropertyException $e) {
            throw new NameGenerationException(\sprintf('File name could not be generated: property %s does not exist.', $this->propertyPath), $e->getCode(), $e);
        }

<<<<<<< HEAD
        if (empty($name)) {
=======
        if (null === $name || '' === $name) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            throw new NameGenerationException(\sprintf('File name could not be generated: property %s is empty.', $this->propertyPath));
        }

        if ($this->transliterate) {
            $name = $this->transliterator->transliterate($name);
        }

        // append the file extension if there is one
<<<<<<< HEAD
        if ($extension = $this->getExtension($file)) {
=======
        if ($extension = $this->getExtensionWithOption($file, $this->keepExtension)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $name = \sprintf('%s.%s', $name, $extension);
        }

        return $name;
    }

    /**
     * @return mixed|null
     */
<<<<<<< HEAD
    private function getPropertyValue(object $object, string $propertyPath)
=======
    private function getPropertyValue(object|array $object, string $propertyPath): mixed
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $accessor = PropertyAccess::createPropertyAccessor();

        return $accessor->getValue($object, $propertyPath);
    }
}
