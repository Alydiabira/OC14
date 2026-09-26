<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Profiler\Dumper;

use Twig\Profiler\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class BaseDumper
{
    private $root;

    public function dump(Profile $profile): string
    {
        return $this->dumpProfile($profile);
    }

    abstract protected function formatTemplate(Profile $profile, $prefix): string;

    abstract protected function formatNonTemplate(Profile $profile, $prefix): string;

    abstract protected function formatTime(Profile $profile, $percent): string;

<<<<<<< HEAD
=======
    protected function formatRoot(Profile $profile): string
    {
        return $profile->getName();
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    private function dumpProfile(Profile $profile, $prefix = '', $sibling = false): string
    {
        if ($profile->isRoot()) {
            $this->root = $profile->getDuration();
<<<<<<< HEAD
            $start = $profile->getName();
=======
            $start = $this->formatRoot($profile);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        } else {
            if ($profile->isTemplate()) {
                $start = $this->formatTemplate($profile, $prefix);
            } else {
                $start = $this->formatNonTemplate($profile, $prefix);
            }
            $prefix .= $sibling ? '│ ' : '  ';
        }

        $percent = $this->root ? $profile->getDuration() / $this->root * 100 : 0;

        if ($profile->getDuration() * 1000 < 1) {
            $str = $start."\n";
        } else {
<<<<<<< HEAD
            $str = sprintf("%s %s\n", $start, $this->formatTime($profile, $percent));
=======
            $str = \sprintf("%s %s\n", $start, $this->formatTime($profile, $percent));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $nCount = \count($profile->getProfiles());
        foreach ($profile as $i => $p) {
            $str .= $this->dumpProfile($p, $prefix, $i + 1 !== $nCount);
        }

        return $str;
    }
}
