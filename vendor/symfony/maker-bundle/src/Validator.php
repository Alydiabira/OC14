<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\MakerBundle\Exception\RuntimeCommandException;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
final class Validator
{
    public static function validateClassName(string $className, string $errorMessage = ''): string
    {
        // remove potential opening slash so we don't match on it
        $pieces = explode('\\', ltrim($className, '\\'));
        $shortClassName = Str::getShortClassName($className);

        $reservedKeywords = ['__halt_compiler', 'abstract', 'and', 'array',
            'as', 'break', 'callable', 'case', 'catch', 'class',
            'clone', 'const', 'continue', 'declare', 'default', 'die', 'do',
            'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor',
            'endforeach', 'endif', 'endswitch', 'endwhile', 'eval',
            'exit', 'extends', 'final', 'finally', 'fn', 'for', 'foreach', 'function',
            'global', 'goto', 'if', 'implements', 'include',
            'include_once', 'instanceof', 'insteadof', 'interface', 'isset',
            'list', 'match', 'namespace', 'new', 'or', 'print', 'private',
            'protected', 'public', 'readonly', 'require', 'require_once', 'return',
            'static', 'switch', 'throw', 'trait', 'try', 'unset',
            'use', 'var', 'while', 'xor', 'yield',
            'int', 'float', 'bool', 'string', 'true', 'false', 'null', 'void',
            'iterable', 'object', '__file__', '__line__', '__dir__', '__function__', '__class__',
            '__method__', '__namespace__', '__trait__', 'self', 'parent', 'collection',
        ];

        foreach ($pieces as $piece) {
            if (!mb_check_encoding($piece, 'UTF-8')) {
<<<<<<< HEAD
                $errorMessage = $errorMessage ?: sprintf('"%s" is not a UTF-8-encoded string.', $piece);
=======
                $errorMessage = $errorMessage ?: \sprintf('"%s" is not a UTF-8-encoded string.', $piece);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                throw new RuntimeCommandException($errorMessage);
            }

            if (!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $piece)) {
<<<<<<< HEAD
                $errorMessage = $errorMessage ?: sprintf('"%s" is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores)', $className);
=======
                $errorMessage = $errorMessage ?: \sprintf('"%s" is not valid as a PHP class name (it must start with a letter or underscore, followed by any number of letters, numbers, or underscores)', $className);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                throw new RuntimeCommandException($errorMessage);
            }

            if (\in_array(strtolower($shortClassName), $reservedKeywords, true)) {
<<<<<<< HEAD
                throw new RuntimeCommandException(sprintf('"%s" is a reserved keyword and thus cannot be used as class name in PHP.', $shortClassName));
=======
                throw new RuntimeCommandException(\sprintf('"%s" is a reserved keyword and thus cannot be used as class name in PHP.', $shortClassName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        // return original class name
        return $className;
    }

    public static function notBlank(?string $value = null): string
    {
        if (null === $value || '' === $value) {
            throw new RuntimeCommandException('This value cannot be blank.');
        }

        return $value;
    }

    public static function validateLength($length)
    {
        if (!$length) {
            return $length;
        }

        $result = filter_var($length, \FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1],
        ]);

        if (false === $result) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('Invalid length "%s".', $length));
=======
            throw new RuntimeCommandException(\sprintf('Invalid length "%s".', $length));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $result;
    }

    public static function validatePrecision($precision)
    {
        if (!$precision) {
            return $precision;
        }

        $result = filter_var($precision, \FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1, 'max_range' => 65],
        ]);

        if (false === $result) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('Invalid precision "%s".', $precision));
=======
            throw new RuntimeCommandException(\sprintf('Invalid precision "%s".', $precision));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $result;
    }

    public static function validateScale($scale)
    {
        if (!$scale) {
            return $scale;
        }

        $result = filter_var($scale, \FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 0, 'max_range' => 30],
        ]);

        if (false === $result) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('Invalid scale "%s".', $scale));
=======
            throw new RuntimeCommandException(\sprintf('Invalid scale "%s".', $scale));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $result;
    }

    public static function validateBoolean($value)
    {
        if ('yes' == $value) {
            return true;
        }

        if ('no' == $value) {
            return false;
        }

        if (null === $valueAsBool = filter_var($value, \FILTER_VALIDATE_BOOLEAN, \FILTER_NULL_ON_FAILURE)) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('Invalid bool value "%s".', $value));
=======
            throw new RuntimeCommandException(\sprintf('Invalid bool value "%s".', $value));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $valueAsBool;
    }

    public static function validatePropertyName(string $name): string
    {
        // check for valid PHP variable name
        if (!Str::isValidPhpVariableName($name)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid PHP property name.', $name));
=======
            throw new \InvalidArgumentException(\sprintf('"%s" is not a valid PHP property name.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $name;
    }

    public static function validateDoctrineFieldName(string $name, ManagerRegistry $registry): string
    {
        // check reserved words
        if ($registry->getConnection()->getDatabasePlatform()->getReservedKeywordsList()->isKeyword($name)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Name "%s" is a reserved word.', $name));
=======
            throw new \InvalidArgumentException(\sprintf('Name "%s" is a reserved word.', $name));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        self::validatePropertyName($name);

        return $name;
    }

    public static function validateEmailAddress(?string $email): string
    {
        if (!filter_var($email, \FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('"%s" is not a valid email address.', $email));
=======
            throw new RuntimeCommandException(\sprintf('"%s" is not a valid email address.', $email));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $email;
    }

    public static function existsOrNull(?string $className = null, array $entities = []): ?string
    {
        if (null !== $className) {
            self::validateClassName($className);

            if (str_starts_with($className, '\\')) {
                self::classExists($className);
            } else {
                self::entityExists($className, $entities);
            }
        }

        return $className;
    }

    public static function classExists(string $className, string $errorMessage = ''): string
    {
        self::notBlank($className);

        if (!class_exists($className)) {
<<<<<<< HEAD
            $errorMessage = $errorMessage ?: sprintf('Class "%s" doesn\'t exist; please enter an existing full class name.', $className);
=======
            $errorMessage = $errorMessage ?: \sprintf('Class "%s" doesn\'t exist; please enter an existing full class name.', $className);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            throw new RuntimeCommandException($errorMessage);
        }

        return $className;
    }

    public static function entityExists(?string $className = null, array $entities = []): string
    {
        self::notBlank($className);

        if (empty($entities)) {
            throw new RuntimeCommandException('There are no registered entities; please create an entity before using this command.');
        }

        if (str_starts_with($className, '\\')) {
<<<<<<< HEAD
            self::classExists($className, sprintf('Entity "%s" doesn\'t exist; please enter an existing one or create a new one.', $className));
        }

        if (!\in_array($className, $entities) && !\in_array(ltrim($className, '\\'), $entities)) {
            throw new RuntimeCommandException(sprintf('Entity "%s" doesn\'t exist; please enter an existing one or create a new one.', $className));
=======
            self::classExists($className, \sprintf('Entity "%s" doesn\'t exist; please enter an existing one or create a new one.', $className));
        }

        if (!\in_array($className, $entities) && !\in_array(ltrim($className, '\\'), $entities)) {
            throw new RuntimeCommandException(\sprintf('Entity "%s" doesn\'t exist; please enter an existing one or create a new one.', $className));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $className;
    }

    public static function classDoesNotExist($className): string
    {
        self::notBlank($className);

        if (class_exists($className)) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('Class "%s" already exists.', $className));
=======
            throw new RuntimeCommandException(\sprintf('Class "%s" already exists.', $className));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $className;
    }

    public static function classIsUserInterface($userClassName): string
    {
        self::classExists($userClassName);

        if (!isset(class_implements($userClassName)[UserInterface::class])) {
<<<<<<< HEAD
            throw new RuntimeCommandException(sprintf('The class "%s" must implement "%s".', $userClassName, UserInterface::class));
=======
            throw new RuntimeCommandException(\sprintf('The class "%s" must implement "%s".', $userClassName, UserInterface::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return $userClassName;
    }
<<<<<<< HEAD
=======

    public static function classIsBackedEnum($backedEnum): string
    {
        self::classExists($backedEnum);

        if (!isset(class_implements($backedEnum)[\BackedEnum::class])) {
            throw new RuntimeCommandException(\sprintf('The class "%s" is not a valid BackedEnum.', $backedEnum));
        }

        return $backedEnum;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
