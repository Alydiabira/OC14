<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Source
{
<<<<<<< HEAD
    private $code;
    private $name;
    private $path;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @param string $code The template source code
     * @param string $name The template logical name
     * @param string $path The filesystem path of the template if any
     */
<<<<<<< HEAD
    public function __construct(string $code, string $name, string $path = '')
    {
        $this->code = $code;
        $this->name = $name;
        $this->path = $path;
=======
    public function __construct(
        private string $code,
        private string $name,
        private string $path = '',
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }
<<<<<<< HEAD
=======

    /**
     * Returns the 1-based column for a 0-based byte offset in the source code.
     *
     * A negative offset means the position is unknown and yields null.
     *
     * @return positive-int|null
     */
    public function getColumn(int $offset): ?int
    {
        if ($offset < 0) {
            return null;
        }

        $before = str_replace(["\r\n", "\r"], "\n", substr($this->code, 0, $offset));
        $lineStart = strrpos($before, "\n");

        return false === $lineStart ? \strlen($before) + 1 : \strlen($before) - $lineStart;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
