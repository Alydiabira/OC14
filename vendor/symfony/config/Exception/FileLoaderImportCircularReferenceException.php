<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Exception;

/**
 * Exception class for when a circular reference is detected when importing resources.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLoaderImportCircularReferenceException extends LoaderLoadException
{
    public function __construct(array $resources, int $code = 0, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        $message = sprintf('Circular reference detected in "%s" ("%s" > "%s").', $this->varToString($resources[0]), implode('" > "', $resources), $resources[0]);
=======
        $message = \sprintf('Circular reference detected in "%s" ("%s" > "%s").', $this->varToString($resources[0]), implode('" > "', $resources), $resources[0]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        \Exception::__construct($message, $code, $previous);
    }
}
