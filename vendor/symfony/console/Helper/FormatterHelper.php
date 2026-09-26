<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Formatter\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     */
    public function formatSection(string $section, string $message, string $style = 'info'): string
    {
<<<<<<< HEAD
        return sprintf('<%s>[%s]</%s> %s', $style, $section, $style, $message);
=======
        return \sprintf('<%s>[%s]</%s> %s', $style, $section, $style, $message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Formats a message as a block of text.
     */
    public function formatBlock(string|array $messages, string $style, bool $large = false): string
    {
        if (!\is_array($messages)) {
            $messages = [$messages];
        }

        $len = 0;
        $lines = [];
        foreach ($messages as $message) {
            $message = OutputFormatter::escape($message);
<<<<<<< HEAD
            $lines[] = sprintf($large ? '  %s  ' : ' %s ', $message);
=======
            $lines[] = \sprintf($large ? '  %s  ' : ' %s ', $message);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $len = max(self::width($message) + ($large ? 4 : 2), $len);
        }

        $messages = $large ? [str_repeat(' ', $len)] : [];
        for ($i = 0; isset($lines[$i]); ++$i) {
            $messages[] = $lines[$i].str_repeat(' ', $len - self::width($lines[$i]));
        }
        if ($large) {
            $messages[] = str_repeat(' ', $len);
        }

        for ($i = 0; isset($messages[$i]); ++$i) {
<<<<<<< HEAD
            $messages[$i] = sprintf('<%s>%s</%s>', $style, $messages[$i], $style);
=======
            $messages[$i] = \sprintf('<%s>%s</%s>', $style, $messages[$i], $style);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return implode("\n", $messages);
    }

    /**
     * Truncates a message to the given length.
     */
    public function truncate(string $message, int $length, string $suffix = '...'): string
    {
        $computedLength = $length - self::width($suffix);

        if ($computedLength > self::width($message)) {
            return $message;
        }

        return self::substr($message, 0, $length).$suffix;
    }

    public function getName(): string
    {
        return 'formatter';
    }
}
