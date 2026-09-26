<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\SoftDeleteable\Query\TreeWalker\Exec;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Exec\MultiTableDeleteExecutor as BaseMultiTableDeleteExecutor;

/**
 * This class is used when a DELETE DQL query is called for entities
 * that are part of an inheritance tree
 *
 * @author Gustavo Falco <comfortablynumb84@gmail.com>
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class MultiTableDeleteExecutor extends BaseMultiTableDeleteExecutor
{
    /**
<<<<<<< HEAD
     * @param array<string, mixed> $config
=======
     * @param ClassMetadata<object> $meta
     * @param array<string, mixed>  $config
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(Node $AST, $sqlWalker, ClassMetadata $meta, AbstractPlatform $platform, array $config)
    {
        parent::__construct($AST, $sqlWalker);

<<<<<<< HEAD
        $sqlStatements = $this->_sqlStatements;
=======
        $sqlStatements = $this->getSqlStatements();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $quoteStrategy = $sqlWalker->getEntityManager()->getConfiguration()->getQuoteStrategy();

        foreach ($sqlStatements as $index => $stmt) {
            $matches = [];
            preg_match('/DELETE FROM (\w+) .+/', $stmt, $matches);

            if (isset($matches[1]) && $quoteStrategy->getTableName($meta, $platform) === $matches[1]) {
                $sqlStatements[$index] = str_replace('DELETE FROM', 'UPDATE', $stmt);
                $sqlStatements[$index] = str_replace(
                    'WHERE',
                    'SET '.$config['fieldName'].' = '.$platform->getCurrentTimestampSQL().' WHERE',
                    $sqlStatements[$index]
                );
            } else {
                // We have to avoid the removal of registers of child entities of a SoftDeleteable entity
                unset($sqlStatements[$index]);
            }
        }

<<<<<<< HEAD
        $this->_sqlStatements = $sqlStatements;
=======
        // @todo: Once the minimum supported ORM version is 2.17, this can always write to the `$this->sqlStatements` property
        if (property_exists($this, 'sqlStatements')) {
            $this->sqlStatements = $sqlStatements;
        } else {
            $this->_sqlStatements = $sqlStatements;
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
