<?php

namespace Vich\UploaderBundle\Util;

use Symfony\Component\String\Slugger\SluggerInterface;
<<<<<<< HEAD
use function strrpos;
use function strtolower;
use function substr;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * @internal
 */
final class Transliterator
{
    public function __construct(private readonly SluggerInterface $slugger)
    {
    }

    /**
     * Transliterate a string. If string represents a filename, extension is kept.
     */
    public function transliterate(string $string, string $separator = '-'): string
    {
        [$filename, $extension] = $this->splitNameByExtension($string);
        $transliterated = $this->slugger->slug($filename, $separator);
        if ('' !== $extension) {
            $transliterated .= '.'.$extension;
        }

<<<<<<< HEAD
        return strtolower($transliterated);
=======
        return \strtolower($transliterated);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Splits filename for array of basename and extension.
     *
     * @return array An array of basename and extension
     */
    private function splitNameByExtension(string $filename): array
    {
<<<<<<< HEAD
        if (false === $pos = strrpos($filename, '.')) {
            return [$filename, ''];
        }

        return [substr($filename, 0, $pos), substr($filename, $pos + 1)];
=======
        if (false === $pos = \strrpos($filename, '.')) {
            return [$filename, ''];
        }

        return [\substr($filename, 0, $pos), \substr($filename, $pos + 1)];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
