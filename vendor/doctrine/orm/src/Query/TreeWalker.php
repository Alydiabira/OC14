<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query;

use Doctrine\ORM\AbstractQuery;

/**
 * Interface for walkers of DQL ASTs (abstract syntax trees).
 *
<<<<<<< HEAD
 * @psalm-import-type QueryComponent from Parser
=======
 * @phpstan-import-type QueryComponent from Parser
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface TreeWalker
{
    /**
     * Initializes TreeWalker with important information about the ASTs to be walked.
     *
<<<<<<< HEAD
     * @psalm-param array<string, QueryComponent> $queryComponents The query components (symbol table).
=======
     * @phpstan-param array<string, QueryComponent> $queryComponents The query components (symbol table).
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(AbstractQuery $query, ParserResult $parserResult, array $queryComponents);

    /**
     * Returns internal queryComponents array.
     *
<<<<<<< HEAD
     * @psalm-return array<string, QueryComponent>
=======
     * @phpstan-return array<string, QueryComponent>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getQueryComponents(): array;

    /**
     * Walks down a SelectStatement AST node.
     */
    public function walkSelectStatement(AST\SelectStatement $selectStatement): void;

    /**
     * Walks down an UpdateStatement AST node.
     */
    public function walkUpdateStatement(AST\UpdateStatement $updateStatement): void;

    /**
     * Walks down a DeleteStatement AST node.
     */
    public function walkDeleteStatement(AST\DeleteStatement $deleteStatement): void;
}
