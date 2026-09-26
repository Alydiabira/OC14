<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\Bundle\DoctrineBundle\Middleware;

use Symfony\Bridge\Doctrine\Middleware\Debug\DebugDataHolder;
use Symfony\Bridge\Doctrine\Middleware\Debug\Query;

use function array_slice;
use function debug_backtrace;
use function in_array;

use const DEBUG_BACKTRACE_IGNORE_ARGS;

<<<<<<< HEAD
/** @psalm-suppress MissingDependency */
class BacktraceDebugDataHolder extends DebugDataHolder
{
    /** @var string[] */
    private array $connWithBacktraces;

=======
class BacktraceDebugDataHolder extends DebugDataHolder
{
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /** @var array<string, array<int|string, mixed>[]> */
    private array $backtraces = [];

    /** @param string[] $connWithBacktraces */
<<<<<<< HEAD
    public function __construct(array $connWithBacktraces)
    {
        $this->connWithBacktraces = $connWithBacktraces;
=======
    public function __construct(
        private readonly array $connWithBacktraces,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function reset(): void
    {
        parent::reset();

        $this->backtraces = [];
    }

    public function addQuery(string $connectionName, Query $query): void
    {
        parent::addQuery($connectionName, $query);

        if (! in_array($connectionName, $this->connWithBacktraces, true)) {
            return;
        }

        // array_slice to skip middleware calls in the trace
        $this->backtraces[$connectionName][] = array_slice(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS), 2);
    }

    /** @return array<string, array<string, mixed>[]> */
    public function getData(): array
    {
        $dataWithBacktraces = [];

        $data = parent::getData();
        foreach ($data as $connectionName => $dataForConn) {
            $dataWithBacktraces[$connectionName] = $this->getDataForConnection($connectionName, $dataForConn);
        }

        return $dataWithBacktraces;
    }

    /**
     * @param mixed[][] $dataForConn
     *
     * @return mixed[][]
     */
    private function getDataForConnection(string $connectionName, array $dataForConn): array
    {
        $data = [];

        foreach ($dataForConn as $idx => $record) {
            $data[] = $this->addBacktracesIfAvailable($connectionName, $record, $idx);
        }

        return $data;
    }

    /**
     * @param mixed[] $record
     *
     * @return mixed[]
     */
    private function addBacktracesIfAvailable(string $connectionName, array $record, int $idx): array
    {
        if (! isset($this->backtraces[$connectionName])) {
            return $record;
        }

        $record['backtrace'] = $this->backtraces[$connectionName][$idx];

        return $record;
    }
}
