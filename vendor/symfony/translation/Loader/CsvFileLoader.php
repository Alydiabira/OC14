<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Loader;

use Symfony\Component\Translation\Exception\NotFoundResourceException;

/**
 * CsvFileLoader loads translations from CSV files.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class CsvFileLoader extends FileLoader
{
    private string $delimiter = ';';
    private string $enclosure = '"';
<<<<<<< HEAD
    private string $escape = '\\';
=======
    private string $escape = '';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    protected function loadResource(string $resource): array
    {
        $messages = [];

<<<<<<< HEAD
        try {
            $file = new \SplFileObject($resource, 'rb');
        } catch (\RuntimeException $e) {
            throw new NotFoundResourceException(sprintf('Error opening file "%s".', $resource), 0, $e);
        }

        $file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY);
        $file->setCsvControl($this->delimiter, $this->enclosure, $this->escape);

        foreach ($file as $data) {
            if (false === $data) {
                continue;
            }

            if (!str_starts_with($data[0], '#') && isset($data[1]) && 2 === \count($data)) {
                $messages[$data[0]] = $data[1];
            }
=======
        if (!$file = @fopen($resource, 'r')) {
            throw new NotFoundResourceException(\sprintf('Error opening file "%s".', $resource));
        }

        try {
            while (false !== $data = fgetcsv($file, null, $this->delimiter, $this->enclosure, $this->escape)) {
                // empty lines are read as [null]
                if (isset($data[1]) && 2 === \count($data) && !str_starts_with($data[0], '#')) {
                    $messages[$data[0]] = $data[1];
                }
            }
        } finally {
            fclose($file);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $messages;
    }

    /**
     * Sets the delimiter, enclosure, and escape character for CSV.
     *
     * @return void
     */
<<<<<<< HEAD
    public function setCsvControl(string $delimiter = ';', string $enclosure = '"', string $escape = '\\')
=======
    public function setCsvControl(string $delimiter = ';', string $enclosure = '"', string $escape = '')
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
        $this->escape = $escape;
    }
}
