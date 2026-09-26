<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder\Comparator;

/**
 * DateCompare compiles date comparisons.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DateComparator extends Comparator
{
    /**
     * @param string $test A comparison string
     *
     * @throws \InvalidArgumentException If the test is not understood
     */
    public function __construct(string $test)
    {
        if (!preg_match('#^\s*(==|!=|[<>]=?|after|since|before|until)?\s*(.+?)\s*$#i', $test, $matches)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Don\'t understand "%s" as a date test.', $test));
=======
            throw new \InvalidArgumentException(\sprintf('Don\'t understand "%s" as a date test.', $test));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        try {
            $date = new \DateTimeImmutable($matches[2]);
            $target = $date->format('U');
        } catch (\Exception) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid date.', $matches[2]));
        }

        $operator = $matches[1] ?? '==';
=======
            throw new \InvalidArgumentException(\sprintf('"%s" is not a valid date.', $matches[2]));
        }

        $operator = $matches[1] ?: '==';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ('since' === $operator || 'after' === $operator) {
            $operator = '>';
        }

        if ('until' === $operator || 'before' === $operator) {
            $operator = '<';
        }

        parent::__construct($target, $operator);
    }
}
