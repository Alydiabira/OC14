<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * Namer using a random base64 string. The resulting name will contain lower- and uppercase alphanumeric
 * characters, '-' and '_', so it can be safely used in URLs.
 *
 * @author Keleti Márton <tejes@hac.hu>
 */
class Base64Namer implements NamerInterface, ConfigurableInterface
{
    use Polyfill\FileExtensionTrait;

    protected const ALPHABET = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';

    /** @var int Length of the resulting name. 10 can be decoded to a 64-bit integer. */
    protected $length = 10;

<<<<<<< HEAD
=======
    protected bool $keepExtension = false;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * Injects configuration options.
     *
     * @param array $options Options for this namer. The following options are accepted:
     *                       - length: the length of the resulting name.
<<<<<<< HEAD
=======
     *                       - keep_extension: whether to keep the original extension or use smart logic
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function configure(array $options): void
    {
        if (isset($options['length'])) {
            $this->length = $options['length'];
        }
<<<<<<< HEAD
    }

    public function name(object $object, PropertyMapping $mapping): string
=======
        if (isset($options['keep_extension'])) {
            $this->keepExtension = $options['keep_extension'];
        }
    }

    public function name(object|array $object, PropertyMapping $mapping): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $file = $mapping->getFile($object);

        $name = '';
        for ($i = 0; $i < $this->length; ++$i) {
            $name .= $this->getRandomChar();
        }

<<<<<<< HEAD
        if ($extension = $this->getExtension($file)) {
=======
        if ($extension = $this->getExtensionWithOption($file, $this->keepExtension)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $name = "$name.$extension";
        }

        return $name;
    }

    protected function getRandomChar(): string
    {
        return self::ALPHABET[\random_int(0, 63)];
    }
}
