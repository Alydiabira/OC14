<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Util;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateDirIterator extends \IteratorIterator
{
    /**
<<<<<<< HEAD
     * @return mixed
=======
     * @return string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return file_get_contents(parent::current());
    }

    /**
<<<<<<< HEAD
     * @return mixed
=======
     * @return string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return (string) parent::key();
    }
}
