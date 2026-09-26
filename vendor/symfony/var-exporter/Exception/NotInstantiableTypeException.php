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

class NotInstantiableTypeException extends \Exception implements ExceptionInterface
{
    public function __construct(string $type, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        parent::__construct(sprintf('Type "%s" is not instantiable.', $type), 0, $previous);
=======
        parent::__construct(\sprintf('Type "%s" is not instantiable.', $type), 0, $previous);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
