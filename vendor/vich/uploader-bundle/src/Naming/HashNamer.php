<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
<<<<<<< HEAD
 * Namer wich uses hash function from random string for generating names.
=======
 * Namer that uses hash function from random string for generating names.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Konstantin Myakshin <koc-dp@yandex.ru>
 */
class HashNamer implements NamerInterface, ConfigurableInterface
{
    use Polyfill\FileExtensionTrait;

<<<<<<< HEAD
    /** @var string */
    private $algorithm = 'sha1';

    /** @var int */
    private $length;

    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - algorithm: wich hash algorithm to use.
     *                       - length: limit file name length
     */
    public function configure(array $options): void
    {
        $options = \array_merge(['algorithm' => $this->algorithm, 'length' => $this->length], $options);

        $this->algorithm = $options['algorithm'];
        $this->length = $options['length'];
    }

    public function name(object $object, PropertyMapping $mapping): string
=======
    private string $algorithm = 'sha1';

    private ?int $length = null;

    private bool $keepExtension = false;

    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - algorithm: which hash algorithm to use.
     *                       - length: limit file name length
     *                       - keep_extension: whether to keep the original extension or use smart logic
     */
    public function configure(array $options): void
    {
        $options = \array_merge(['algorithm' => $this->algorithm, 'length' => $this->length, 'keep_extension' => $this->keepExtension], $options);

        $this->algorithm = $options['algorithm'];
        $this->length = $options['length'];
        $this->keepExtension = $options['keep_extension'];
    }

    public function name(object|array $object, PropertyMapping $mapping): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $file = $mapping->getFile($object);

        $name = \hash($this->algorithm, $this->getRandomString());
        if (null !== $this->length) {
            $name = \substr($name, 0, $this->length);
        }

<<<<<<< HEAD
        if ($extension = $this->getExtension($file)) {
=======
        if ($extension = $this->getExtensionWithOption($file, $this->keepExtension)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $name = \sprintf('%s.%s', $name, $extension);
        }

        return $name;
    }

    protected function getRandomString(): string
    {
        return \microtime(true).\random_int(0, 9_999_999);
    }
}
