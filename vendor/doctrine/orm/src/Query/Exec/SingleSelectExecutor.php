<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Exec;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Result;
<<<<<<< HEAD
=======
use Doctrine\Deprecations\Deprecation;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ORM\Query\AST\SelectStatement;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Executor that executes the SQL statement for simple DQL SELECT statements.
 *
<<<<<<< HEAD
=======
 * @deprecated This class is no longer needed by the ORM and will be removed in 4.0.
 *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 * @link        www.doctrine-project.org
 */
class SingleSelectExecutor extends AbstractSqlExecutor
{
    public function __construct(SelectStatement $AST, SqlWalker $sqlWalker)
    {
<<<<<<< HEAD
=======
        Deprecation::trigger(
            'doctrine/orm',
            'https://github.com/doctrine/orm/pull/11188/',
            'The %s is no longer needed by the ORM and will be removed in 4.0',
            self::class,
        );

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->sqlStatements = $sqlWalker->walkSelectStatement($AST);
    }

    /**
     * {@inheritDoc}
     */
    public function execute(Connection $conn, array $params, array $types): Result
    {
        return $conn->executeQuery($this->sqlStatements, $params, $types, $this->queryCacheProfile);
    }
}
