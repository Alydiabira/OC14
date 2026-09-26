<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Exception;

/**
 * @author Oskar Stark <oskarstark@googlemail.com>
 */
class MissingRequiredOptionException extends IncompleteDsnException
{
    public function __construct(string $option, ?string $dsn = null, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        $message = sprintf('The option "%s" is required but missing.', $option);
=======
        $message = \sprintf('The option "%s" is required but missing.', $option);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        parent::__construct($message, $dsn, $previous);
    }
}
