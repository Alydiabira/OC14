<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use Doctrine\DBAL\Result;
use Doctrine\ORM\Query\ParameterTypeInferer;

use function array_values;
use function is_int;
use function key;
use function ksort;

/**
 * Represents a native SQL query.
 *
 * @final
 */
class NativeQuery extends AbstractQuery
{
    private string $sql;

    /** @return $this */
    public function setSQL(string $sql): self
    {
        $this->sql = $sql;

        return $this;
    }

    public function getSQL(): string
    {
        return $this->sql;
    }

    protected function _doExecute(): Result|int
    {
        $parameters = [];
        $types      = [];

        foreach ($this->getParameters() as $parameter) {
<<<<<<< HEAD
            $name  = $parameter->getName();
=======
            $name = $parameter->getName();

            if ($parameter->typeWasSpecified()) {
                $parameters[$name] = $parameter->getValue();
                $types[$name]      = $parameter->getType();

                continue;
            }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $value = $this->processParameterValue($parameter->getValue());
            $type  = $parameter->getValue() === $value
                ? $parameter->getType()
                : ParameterTypeInferer::inferType($value);

            $parameters[$name] = $value;
            $types[$name]      = $type;
        }

        if ($parameters && is_int(key($parameters))) {
            ksort($parameters);
            ksort($types);

            $parameters = array_values($parameters);
            $types      = array_values($types);
        }

        return $this->em->getConnection()->executeQuery(
            $this->sql,
            $parameters,
            $types,
            $this->queryCacheProfile,
        );
    }
}
