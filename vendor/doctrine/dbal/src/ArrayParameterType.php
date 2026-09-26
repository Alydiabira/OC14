<?php

namespace Doctrine\DBAL;

final class ArrayParameterType
{
    /**
     * Represents an array of ints to be expanded by Doctrine SQL parsing.
     */
    public const INTEGER = ParameterType::INTEGER + Connection::ARRAY_PARAM_OFFSET;

    /**
     * Represents an array of strings to be expanded by Doctrine SQL parsing.
     */
    public const STRING = ParameterType::STRING + Connection::ARRAY_PARAM_OFFSET;

    /**
     * Represents an array of ascii strings to be expanded by Doctrine SQL parsing.
     */
    public const ASCII = ParameterType::ASCII + Connection::ARRAY_PARAM_OFFSET;

    /**
     * Represents an array of ascii strings to be expanded by Doctrine SQL parsing.
     */
    public const BINARY = ParameterType::BINARY + Connection::ARRAY_PARAM_OFFSET;

    /**
     * @internal
     *
<<<<<<< HEAD
     * @psalm-param self::* $type
     *
     * @psalm-return ParameterType::INTEGER|ParameterType::STRING|ParameterType::ASCII|ParameterType::BINARY
=======
     * @phpstan-param self::* $type
     *
     * @phpstan-return ParameterType::INTEGER|ParameterType::STRING|ParameterType::ASCII|ParameterType::BINARY
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public static function toElementParameterType(int $type): int
    {
        return $type - Connection::ARRAY_PARAM_OFFSET;
    }

    private function __construct()
    {
    }
}
