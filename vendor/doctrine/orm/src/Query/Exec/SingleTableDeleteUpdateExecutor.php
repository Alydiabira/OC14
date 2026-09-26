<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\Exec;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Connections\PrimaryReadReplicaConnection;
use Doctrine\ORM\Query\AST;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Executor that executes the SQL statements for DQL DELETE/UPDATE statements on classes
 * that are mapped to a single table.
 *
 * @link        www.doctrine-project.org
<<<<<<< HEAD
 *
 * @todo This is exactly the same as SingleSelectExecutor. Unify in SingleStatementExecutor.
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class SingleTableDeleteUpdateExecutor extends AbstractSqlExecutor
{
    public function __construct(AST\Node $AST, SqlWalker $sqlWalker)
    {
        if ($AST instanceof AST\UpdateStatement) {
            $this->sqlStatements = $sqlWalker->walkUpdateStatement($AST);
        } elseif ($AST instanceof AST\DeleteStatement) {
            $this->sqlStatements = $sqlWalker->walkDeleteStatement($AST);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function execute(Connection $conn, array $params, array $types): int
    {
        if ($conn instanceof PrimaryReadReplicaConnection) {
            $conn->ensureConnectedToPrimary();
        }

        return $conn->executeStatement($this->sqlStatements, $params, $types);
    }
}
