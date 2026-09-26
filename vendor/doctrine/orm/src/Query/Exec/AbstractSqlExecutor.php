<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Exec;

use Doctrine\DBAL\ArrayParameterType;
use Doctrine\DBAL\Cache\QueryCacheProfile;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Result;
use Doctrine\DBAL\Types\Type;

/**
 * Base class for SQL statement executors.
 *
 * @link        http://www.doctrine-project.org
 *
 * @todo Rename: AbstractSQLExecutor
<<<<<<< HEAD
 * @psalm-type WrapperParameterType = string|Type|ParameterType::*|ArrayParameterType::*
 * @psalm-type WrapperParameterTypeArray = array<int<0, max>, WrapperParameterType>|array<string, WrapperParameterType>
=======
 * @phpstan-type WrapperParameterType = string|Type|ParameterType::*|ArrayParameterType::*
 * @phpstan-type WrapperParameterTypeArray = array<int<0, max>, WrapperParameterType>|array<string, WrapperParameterType>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
abstract class AbstractSqlExecutor
{
    /** @var list<string>|string */
    protected array|string $sqlStatements;

    protected QueryCacheProfile|null $queryCacheProfile = null;

    /**
     * Gets the SQL statements that are executed by the executor.
     *
     * @return list<string>|string  All the SQL update statements.
     */
    public function getSqlStatements(): array|string
    {
        return $this->sqlStatements;
    }

    public function setQueryCacheProfile(QueryCacheProfile $qcp): void
    {
        $this->queryCacheProfile = $qcp;
    }

    /**
     * Do not use query cache
     */
    public function removeQueryCacheProfile(): void
    {
        $this->queryCacheProfile = null;
    }

    /**
     * Executes all sql statements.
     *
     * @param Connection                       $conn   The database connection that is used to execute the queries.
     * @param list<mixed>|array<string, mixed> $params The parameters.
<<<<<<< HEAD
     * @psalm-param WrapperParameterTypeArray  $types  The parameter types.
=======
     * @phpstan-param WrapperParameterTypeArray  $types  The parameter types.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    abstract public function execute(Connection $conn, array $params, array $types): Result|int;
}
