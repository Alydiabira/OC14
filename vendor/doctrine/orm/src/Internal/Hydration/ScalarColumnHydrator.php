<?php

declare(strict_types=1);

namespace Doctrine\ORM\Internal\Hydration;

use Doctrine\DBAL\Driver\Exception;
use Doctrine\ORM\Exception\MultipleSelectorsFoundException;

<<<<<<< HEAD
use function array_column;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function count;

/**
 * Hydrator that produces one-dimensional array.
 */
final class ScalarColumnHydrator extends AbstractHydrator
{
    /**
     * {@inheritDoc}
     *
     * @throws MultipleSelectorsFoundException
     * @throws Exception
     */
    protected function hydrateAllData(): array
    {
        if (count($this->resultSetMapping()->fieldMappings) > 1) {
            throw MultipleSelectorsFoundException::create($this->resultSetMapping()->fieldMappings);
        }

<<<<<<< HEAD
        $result = $this->statement()->fetchAllNumeric();

        return array_column($result, 0);
=======
        return $this->statement()->fetchFirstColumn();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
