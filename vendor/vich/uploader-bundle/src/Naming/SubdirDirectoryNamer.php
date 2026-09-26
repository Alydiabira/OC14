<?php

namespace Vich\UploaderBundle\Naming;

use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
<<<<<<< HEAD
 * Directory namer wich can create subfolder depends on generated filename.
=======
 * Directory namer that can create subfolder depends on generated filename.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Konstantin Myakshin <koc-dp@yandex.ru>
 */
final class SubdirDirectoryNamer implements DirectoryNamerInterface, ConfigurableInterface
{
<<<<<<< HEAD
    /** @var int */
    private $charsPerDir = 2;

    /** @var int */
    private $dirs = 1;
=======
    private int $charsPerDir = 2;

    private int $dirs = 1;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * @param array $options Options for this namer. The following options are accepted:
     *                       - chars_per_dir: how many chars use for each dir.
     *                       - dirs: how many dirs create
     */
    public function configure(array $options): void
    {
        $options = \array_merge(['chars_per_dir' => $this->charsPerDir, 'dirs' => $this->dirs], $options);

        $this->charsPerDir = $options['chars_per_dir'];
        $this->dirs = $options['dirs'];
    }

    public function directoryName(object|array $object, PropertyMapping $mapping): string
    {
        $fileName = $mapping->getFilename($object);

        $parts = [];
        for ($i = 0, $start = 0; $i < $this->dirs; $i++, $start += $this->charsPerDir) {
            $parts[] = \substr($fileName, $start, $this->charsPerDir);
        }

        return \implode('/', $parts);
    }
}
