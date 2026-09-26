<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\File\Exception;

/**
 * Thrown when a file was not found.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileNotFoundException extends FileException
{
    public function __construct(string $path)
    {
<<<<<<< HEAD
        parent::__construct(sprintf('The file "%s" does not exist', $path));
=======
        parent::__construct(\sprintf('The file "%s" does not exist', $path));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
