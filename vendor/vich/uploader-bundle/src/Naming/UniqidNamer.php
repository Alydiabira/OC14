<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
<<<<<<< HEAD
 * UniqidNamer.
 *
 * @author Emmanuel Vella <vella.emmanuel@gmail.com>
 */
final class UniqidNamer implements NamerInterface
{
    use Polyfill\FileExtensionTrait;

    public function name(object $object, PropertyMapping $mapping): string
    {
        $file = $mapping->getFile($object);
        $name = \str_replace('.', '', \uniqid('', true));
        $extension = $this->getExtension($file);
=======
 * @author Emmanuel Vella <vella.emmanuel@gmail.com>
 */
final class UniqidNamer implements NamerInterface, ConfigurableInterface
{
    use Polyfill\FileExtensionTrait;

    private bool $keepExtension = false;

    public function configure(array $options): void
    {
        $this->keepExtension = isset($options['keep_extension']) ? (bool) $options['keep_extension'] : $this->keepExtension;
    }

    public function name(object|array $object, PropertyMapping $mapping): string
    {
        $file = $mapping->getFile($object);
        $name = \str_replace('.', '', \uniqid('', true));
        $extension = $this->getExtensionWithOption($file, $this->keepExtension);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if (\is_string($extension) && '' !== $extension) {
            $name = \sprintf('%s.%s', $name, $extension);
        }

        return $name;
    }
}
