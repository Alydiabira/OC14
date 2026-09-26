<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Polyfill\Intl\Icu\DateFormat;

/**
 * Parser and formatter for 12 hour format (1-12).
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class Hour1201Transformer extends HourTransformer
{
    public function format(\DateTime $dateTime, int $length): string
    {
        return $this->padLeft($dateTime->format('g'), $length);
    }

<<<<<<< HEAD
    public function normalizeHour(int $hour, string $marker = null): int
=======
    public function normalizeHour(int $hour, ?string $marker = null): int
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ('PM' !== $marker && 12 === $hour) {
            $hour = 0;
        } elseif ('PM' === $marker && 12 !== $hour) {
            // If PM and hour is not 12 (1-12), sum 12 hour
            $hour += 12;
        }

        return $hour;
    }

    public function getReverseMatchingRegExp(int $length): string
    {
        return '\d{1,2}';
    }

    public function extractDateOptions(string $matched, int $length): array
    {
        return [
            'hour' => (int) $matched,
            'hourInstance' => $this,
        ];
    }
}
