<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Pierre du Plessis <pdples@gmail.com>
 */
final class Cursor
{
    private OutputInterface $output;
    /** @var resource */
    private $input;

    /**
     * @param resource|null $input
     */
    public function __construct(OutputInterface $output, $input = null)
    {
        $this->output = $output;
        $this->input = $input ?? (\defined('STDIN') ? \STDIN : fopen('php://input', 'r+'));
    }

    /**
     * @return $this
     */
    public function moveUp(int $lines = 1): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%dA", $lines));
=======
        $this->output->write(\sprintf("\x1b[%dA", $lines));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function moveDown(int $lines = 1): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%dB", $lines));
=======
        $this->output->write(\sprintf("\x1b[%dB", $lines));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function moveRight(int $columns = 1): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%dC", $columns));
=======
        $this->output->write(\sprintf("\x1b[%dC", $columns));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function moveLeft(int $columns = 1): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%dD", $columns));
=======
        $this->output->write(\sprintf("\x1b[%dD", $columns));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function moveToColumn(int $column): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%dG", $column));
=======
        $this->output->write(\sprintf("\x1b[%dG", $column));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function moveToPosition(int $column, int $row): static
    {
<<<<<<< HEAD
        $this->output->write(sprintf("\x1b[%d;%dH", $row + 1, $column));
=======
        $this->output->write(\sprintf("\x1b[%d;%dH", $row + 1, $column));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this;
    }

    /**
     * @return $this
     */
    public function savePosition(): static
    {
        $this->output->write("\x1b7");

        return $this;
    }

    /**
     * @return $this
     */
    public function restorePosition(): static
    {
        $this->output->write("\x1b8");

        return $this;
    }

    /**
     * @return $this
     */
    public function hide(): static
    {
        $this->output->write("\x1b[?25l");

        return $this;
    }

    /**
     * @return $this
     */
    public function show(): static
    {
        $this->output->write("\x1b[?25h\x1b[?0c");

        return $this;
    }

    /**
     * Clears all the output from the current line.
     *
     * @return $this
     */
    public function clearLine(): static
    {
        $this->output->write("\x1b[2K");

        return $this;
    }

    /**
     * Clears all the output from the current line after the current position.
     */
    public function clearLineAfter(): self
    {
        $this->output->write("\x1b[K");

        return $this;
    }

    /**
     * Clears all the output from the cursors' current position to the end of the screen.
     *
     * @return $this
     */
    public function clearOutput(): static
    {
        $this->output->write("\x1b[0J");

        return $this;
    }

    /**
     * Clears the entire screen.
     *
     * @return $this
     */
    public function clearScreen(): static
    {
        $this->output->write("\x1b[2J");

        return $this;
    }

    /**
     * Returns the current cursor position as x,y coordinates.
     */
    public function getCurrentPosition(): array
    {
        static $isTtySupported;

        if (!$isTtySupported ??= '/' === \DIRECTORY_SEPARATOR && stream_isatty(\STDOUT)) {
            return [1, 1];
        }

        $sttyMode = shell_exec('stty -g');
        shell_exec('stty -icanon -echo');

        @fwrite($this->input, "\033[6n");

        $code = trim(fread($this->input, 1024));

<<<<<<< HEAD
        shell_exec(sprintf('stty %s', $sttyMode));
=======
        shell_exec(\sprintf('stty %s', $sttyMode));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        sscanf($code, "\033[%d;%dR", $row, $col);

        return [$col, $row];
    }
}
