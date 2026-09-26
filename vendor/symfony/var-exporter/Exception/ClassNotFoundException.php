<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarExporter\Exception;

class ClassNotFoundException extends \Exception implements ExceptionInterface
{
    public function __construct(string $class, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        parent::__construct(sprintf('Class "%s" not found.', $class), 0, $previous);
=======
        parent::__construct(\sprintf('Class "%s" not found.', $class), 0, $previous);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
