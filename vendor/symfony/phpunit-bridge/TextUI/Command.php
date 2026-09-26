<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\PhpUnit\TextUI;

if (version_compare(\PHPUnit\Runner\Version::id(), '9.0.0', '<')) {
<<<<<<< HEAD
    class_alias('Symfony\Bridge\PhpUnit\Legacy\CommandForV7', 'Symfony\Bridge\PhpUnit\TextUI\Command');
=======
    class_alias('Symfony\Bridge\PhpUnit\Legacy\CommandForV8', 'Symfony\Bridge\PhpUnit\TextUI\Command');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
} else {
    class_alias('Symfony\Bridge\PhpUnit\Legacy\CommandForV9', 'Symfony\Bridge\PhpUnit\TextUI\Command');
}

if (false) {
    class Command
    {
    }
}
