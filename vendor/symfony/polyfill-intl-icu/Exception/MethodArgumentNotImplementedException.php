<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Polyfill\Intl\Icu\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodArgumentNotImplementedException extends NotImplementedException
{
    /**
     * @param string $methodName The method name that raised the exception
     * @param string $argName    The argument name that is not implemented
     */
    public function __construct(string $methodName, string $argName)
    {
<<<<<<< HEAD
        $message = sprintf('The %s() method\'s argument $%s behavior is not implemented.', $methodName, $argName);
=======
        $message = \sprintf('The %s() method\'s argument $%s behavior is not implemented.', $methodName, $argName);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        parent::__construct($message);
    }
}
