<?php

namespace Vich\UploaderBundle\Naming;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\FileAbstraction\ReplacingFile;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Util\Transliterator;

/**
<<<<<<< HEAD
 * OrignameNamer.
 *
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @author Ivan Borzenkov <ivan.borzenkov@gmail.com>
 */
final class OrignameNamer implements NamerInterface, ConfigurableInterface
{
<<<<<<< HEAD
=======
    use Polyfill\FileExtensionTrait;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private bool $transliterate = false;

    public function __construct(private readonly Transliterator $transliterator)
    {
    }

<<<<<<< HEAD
    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - transliterate: whether the filename should be transliterated or not
=======
    private bool $keepExtension = false;

    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - transliterate: whether the filename should be transliterated or not
     *                       - keep_extension: whether to keep the original extension or use smart logic
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function configure(array $options): void
    {
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
        /* @var $file UploadedFile|ReplacingFile */
        $file = $mapping->getFile($object);
        $name = $file->getClientOriginalName();

        if ($this->transliterate) {
            $name = $this->transliterator->transliterate($name);
        }

<<<<<<< HEAD
=======
        $extension = $this->getExtensionWithOption($file, $this->keepExtension);

        if (\is_string($extension) && '' !== $extension && !\str_ends_with($name, ".$extension")) {
            $name .= ".$extension";
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return \uniqid().'_'.$name;
    }
}
