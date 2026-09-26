<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Event;

use Composer\Script\Event;
use Composer\Script\ScriptEvents;

class UpdateEvent extends Event
{
    private $force;
    private $reset;
<<<<<<< HEAD

    public function __construct(bool $force, bool $reset)
=======
    private $assumeYesForPrompts;

    public function __construct(bool $force, bool $reset, bool $assumeYesForPrompts)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->name = ScriptEvents::POST_UPDATE_CMD;
        $this->force = $force;
        $this->reset = $reset;
<<<<<<< HEAD
=======
        $this->assumeYesForPrompts = $assumeYesForPrompts;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function force(): bool
    {
        return $this->force;
    }

    public function reset(): bool
    {
        return $this->reset;
    }
<<<<<<< HEAD
=======

    public function assumeYesForPrompts(): bool
    {
        return $this->assumeYesForPrompts;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
