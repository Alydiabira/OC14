<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheWarmer;

use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Aggregates several cache warmers into a single one.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class CacheWarmerAggregate implements CacheWarmerInterface
{
    private iterable $warmers;
    private bool $debug;
    private ?string $deprecationLogsFilepath;
    private bool $optionalsEnabled = false;
    private bool $onlyOptionalsEnabled = false;

    /**
     * @param iterable<mixed, CacheWarmerInterface> $warmers
     */
    public function __construct(iterable $warmers = [], bool $debug = false, ?string $deprecationLogsFilepath = null)
    {
        $this->warmers = $warmers;
        $this->debug = $debug;
        $this->deprecationLogsFilepath = $deprecationLogsFilepath;
    }

    public function enableOptionalWarmers(): void
    {
        $this->optionalsEnabled = true;
    }

    public function enableOnlyOptionalWarmers(): void
    {
        $this->onlyOptionalsEnabled = $this->optionalsEnabled = true;
    }

    /**
     * @param string|null $buildDir
     */
    public function warmUp(string $cacheDir, string|SymfonyStyle|null $buildDir = null, ?SymfonyStyle $io = null): array
    {
        if ($buildDir instanceof SymfonyStyle) {
            trigger_deprecation('symfony/http-kernel', '6.4', 'Passing a "%s" as second argument of "%s()" is deprecated, pass it as third argument instead, after the build directory.', SymfonyStyle::class, __METHOD__);
            $io = $buildDir;
            $buildDir = null;
        }

        if ($collectDeprecations = $this->debug && !\defined('PHPUNIT_COMPOSER_INSTALL')) {
            $collectedLogs = [];
<<<<<<< HEAD
            $previousHandler = set_error_handler(function ($type, $message, $file, $line) use (&$collectedLogs, &$previousHandler) {
=======
            $previousHandler = set_error_handler(static function ($type, $message, $file, $line) use (&$collectedLogs, &$previousHandler) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                if (\E_USER_DEPRECATED !== $type && \E_DEPRECATED !== $type) {
                    return $previousHandler ? $previousHandler($type, $message, $file, $line) : false;
                }

                if (isset($collectedLogs[$message])) {
                    ++$collectedLogs[$message]['count'];

                    return null;
                }

                $backtrace = debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS, 3);
                // Clean the trace by removing first frames added by the error handler itself.
                for ($i = 0; isset($backtrace[$i]); ++$i) {
                    if (isset($backtrace[$i]['file'], $backtrace[$i]['line']) && $backtrace[$i]['line'] === $line && $backtrace[$i]['file'] === $file) {
                        $backtrace = \array_slice($backtrace, 1 + $i);
                        break;
                    }
                }

                $collectedLogs[$message] = [
                    'type' => $type,
                    'message' => $message,
                    'file' => $file,
                    'line' => $line,
                    'trace' => $backtrace,
                    'count' => 1,
                ];

                return null;
            });
        }

        $preload = [];
        try {
            foreach ($this->warmers as $warmer) {
                if (!$this->optionalsEnabled && $warmer->isOptional()) {
                    continue;
                }
                if ($this->onlyOptionalsEnabled && !$warmer->isOptional()) {
                    continue;
                }

                $start = microtime(true);
                foreach ((array) $warmer->warmUp($cacheDir, $buildDir) as $item) {
                    if (is_dir($item) || (str_starts_with($item, \dirname($cacheDir)) && !is_file($item)) || ($buildDir && str_starts_with($item, \dirname($buildDir)) && !is_file($item))) {
<<<<<<< HEAD
                        throw new \LogicException(sprintf('"%s::warmUp()" should return a list of files or classes but "%s" is none of them.', $warmer::class, $item));
=======
                        throw new \LogicException(\sprintf('"%s::warmUp()" should return a list of files or classes but "%s" is none of them.', $warmer::class, $item));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    }
                    $preload[] = $item;
                }

                if ($io?->isDebug()) {
<<<<<<< HEAD
                    $io->info(sprintf('"%s" completed in %0.2fms.', $warmer::class, 1000 * (microtime(true) - $start)));
=======
                    $io->info(\sprintf('"%s" completed in %0.2fms.', $warmer::class, 1000 * (microtime(true) - $start)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        } finally {
            if ($collectDeprecations) {
                restore_error_handler();

<<<<<<< HEAD
                if (is_file($this->deprecationLogsFilepath)) {
                    $previousLogs = unserialize(file_get_contents($this->deprecationLogsFilepath));
                    if (\is_array($previousLogs)) {
                        $collectedLogs = array_merge($previousLogs, $collectedLogs);
                    }
                }

                file_put_contents($this->deprecationLogsFilepath, serialize(array_values($collectedLogs)));
=======
                if ($h = fopen($this->deprecationLogsFilepath, 'c+')) {
                    flock($h, \LOCK_EX);

                    set_error_handler(static fn () => true);
                    try {
                        $previousLogs = unserialize(stream_get_contents($h), ['allowed_classes' => false]);
                    } finally {
                        restore_error_handler();
                    }
                    if (\is_array($previousLogs)) {
                        $collectedLogs = array_merge($previousLogs, $collectedLogs);
                    }

                    $serializedLogs = serialize(array_values($collectedLogs));

                    ftruncate($h, 0);
                    rewind($h);
                    fwrite($h, $serializedLogs);
                    flock($h, \LOCK_UN);
                    fclose($h);
                }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        return array_values(array_unique($preload));
    }

    public function isOptional(): bool
    {
        return false;
    }
}
