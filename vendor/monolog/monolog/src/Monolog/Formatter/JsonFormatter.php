<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Formatter;

use Stringable;
use Throwable;
use Monolog\LogRecord;

/**
 * Encodes whatever record data is passed to it as json
 *
 * This can be useful to log to databases or remote APIs
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonFormatter extends NormalizerFormatter
{
    public const BATCH_MODE_JSON = 1;
    public const BATCH_MODE_NEWLINES = 2;

    /** @var self::BATCH_MODE_* */
    protected int $batchMode;

    protected bool $appendNewline;

    protected bool $ignoreEmptyContextAndExtra;

    protected bool $includeStacktraces = false;

    /**
     * @param self::BATCH_MODE_* $batchMode
<<<<<<< HEAD
     *
     * @throws \RuntimeException If the function json_encode does not exist
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(int $batchMode = self::BATCH_MODE_JSON, bool $appendNewline = true, bool $ignoreEmptyContextAndExtra = false, bool $includeStacktraces = false)
    {
        $this->batchMode = $batchMode;
        $this->appendNewline = $appendNewline;
        $this->ignoreEmptyContextAndExtra = $ignoreEmptyContextAndExtra;
        $this->includeStacktraces = $includeStacktraces;

        parent::__construct();
    }

    /**
     * The batch mode option configures the formatting style for
     * multiple records. By default, multiple records will be
     * formatted as a JSON-encoded array. However, for
     * compatibility with some API endpoints, alternative styles
     * are available.
     */
    public function getBatchMode(): int
    {
        return $this->batchMode;
    }

    /**
     * True if newlines are appended to every formatted record
     */
    public function isAppendingNewlines(): bool
    {
        return $this->appendNewline;
    }

    /**
     * @inheritDoc
     */
    public function format(LogRecord $record): string
    {
<<<<<<< HEAD
        $normalized = parent::format($record);

        if (isset($normalized['context']) && $normalized['context'] === []) {
            if ($this->ignoreEmptyContextAndExtra) {
                unset($normalized['context']);
            } else {
                $normalized['context'] = new \stdClass;
            }
        }
        if (isset($normalized['extra']) && $normalized['extra'] === []) {
            if ($this->ignoreEmptyContextAndExtra) {
                unset($normalized['extra']);
            } else {
                $normalized['extra'] = new \stdClass;
            }
        }
=======
        $normalized = $this->normalizeRecord($record);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $this->toJson($normalized, true) . ($this->appendNewline ? "\n" : '');
    }

    /**
     * @inheritDoc
     */
    public function formatBatch(array $records): string
    {
        return match ($this->batchMode) {
            static::BATCH_MODE_NEWLINES => $this->formatBatchNewlines($records),
            default => $this->formatBatchJson($records),
        };
    }

    /**
     * @return $this
     */
    public function includeStacktraces(bool $include = true): self
    {
        $this->includeStacktraces = $include;

        return $this;
    }

    /**
<<<<<<< HEAD
=======
     * @return array<array<mixed>|bool|float|int|\stdClass|string|null>
     */
    protected function normalizeRecord(LogRecord $record): array
    {
        $normalized = parent::normalizeRecord($record);

        if (isset($normalized['context']) && $normalized['context'] === []) {
            if ($this->ignoreEmptyContextAndExtra) {
                unset($normalized['context']);
            } else {
                $normalized['context'] = new \stdClass;
            }
        }
        if (isset($normalized['extra']) && $normalized['extra'] === []) {
            if ($this->ignoreEmptyContextAndExtra) {
                unset($normalized['extra']);
            } else {
                $normalized['extra'] = new \stdClass;
            }
        }

        return $normalized;
    }

    /**
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * Return a JSON-encoded array of records.
     *
     * @phpstan-param LogRecord[] $records
     */
    protected function formatBatchJson(array $records): string
    {
<<<<<<< HEAD
        return $this->toJson($this->normalize($records), true);
=======
        $formatted = array_map(fn (LogRecord $record) => $this->normalizeRecord($record), $records);

        return $this->toJson($formatted, true);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Use new lines to separate records instead of a
     * JSON-encoded array.
     *
     * @phpstan-param LogRecord[] $records
     */
    protected function formatBatchNewlines(array $records): string
    {
        $oldNewline = $this->appendNewline;
        $this->appendNewline = false;
        $formatted = array_map(fn (LogRecord $record) => $this->format($record), $records);
        $this->appendNewline = $oldNewline;

        return implode("\n", $formatted);
    }

    /**
     * Normalizes given $data.
     *
     * @return null|scalar|array<mixed[]|scalar|null|object>|object
     */
    protected function normalize(mixed $data, int $depth = 0): mixed
    {
<<<<<<< HEAD
=======
        if (is_null($data) || is_scalar($data)) {
            return $data;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if ($depth > $this->maxNormalizeDepth) {
            return 'Over '.$this->maxNormalizeDepth.' levels deep, aborting normalization';
        }

<<<<<<< HEAD
        if (is_array($data)) {
=======
        if (\is_array($data)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $normalized = [];

            $count = 1;
            foreach ($data as $key => $value) {
                if ($count++ > $this->maxNormalizeItemCount) {
<<<<<<< HEAD
                    $normalized['...'] = 'Over '.$this->maxNormalizeItemCount.' items ('.count($data).' total), aborting normalization';
=======
                    $normalized['...'] = 'Over '.$this->maxNormalizeItemCount.' items ('.\count($data).' total), aborting normalization';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    break;
                }

                $normalized[$key] = $this->normalize($value, $depth + 1);
            }

            return $normalized;
        }

<<<<<<< HEAD
        if (is_object($data)) {
=======
        if (\is_object($data)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($data instanceof \DateTimeInterface) {
                return $this->formatDate($data);
            }

            if ($data instanceof Throwable) {
                return $this->normalizeException($data, $depth);
            }

            // if the object has specific json serializability we want to make sure we skip the __toString treatment below
            if ($data instanceof \JsonSerializable) {
                return $data;
            }

            if ($data instanceof Stringable) {
<<<<<<< HEAD
                return $data->__toString();
=======
                try {
                    return $data->__toString();
                } catch (Throwable) {
                    return $data::class;
                }
            }

            if (\get_class($data) === '__PHP_Incomplete_Class') {
                return new \ArrayObject($data);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            return $data;
        }

<<<<<<< HEAD
        if (is_resource($data)) {
            return parent::normalize($data);
        }

        return $data;
=======
        return parent::normalize($data);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Normalizes given exception with or without its own stack trace based on
     * `includeStacktraces` property.
     *
<<<<<<< HEAD
     * @inheritDoc
=======
     * @return array<array-key, string|int|array<string|int|array<string>>>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected function normalizeException(Throwable $e, int $depth = 0): array
    {
        $data = parent::normalizeException($e, $depth);
        if (!$this->includeStacktraces) {
            unset($data['trace']);
        }

        return $data;
    }
}
