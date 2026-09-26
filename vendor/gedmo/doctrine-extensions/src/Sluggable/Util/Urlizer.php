<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sluggable\Util;

use Behat\Transliterator\Transliterator;
<<<<<<< HEAD
=======
use Gedmo\Exception\RuntimeException;

if (!class_exists(Transliterator::class)) {
    throw new RuntimeException(sprintf('Cannot use the "%s" class when the "behat/transliterator" package is not installed.', Urlizer::class));
}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Transliteration utility
 *
<<<<<<< HEAD
=======
 * @deprecated since gedmo/doctrine-extensions 3.21, will be removed in version 4.0.
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @final since gedmo/doctrine-extensions 3.11
 */
class Urlizer extends Transliterator
{
}
