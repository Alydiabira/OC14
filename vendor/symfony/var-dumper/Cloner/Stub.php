<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Cloner;

<<<<<<< HEAD
use Symfony\Component\VarDumper\Cloner\Internal\NoDefault;

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * Represents the main properties of a PHP variable.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Stub
{
    public const TYPE_REF = 1;
    public const TYPE_STRING = 2;
    public const TYPE_ARRAY = 3;
    public const TYPE_OBJECT = 4;
    public const TYPE_RESOURCE = 5;
    public const TYPE_SCALAR = 6;

    public const STRING_BINARY = 1;
    public const STRING_UTF8 = 2;

    public const ARRAY_ASSOC = 1;
    public const ARRAY_INDEXED = 2;

    public $type = self::TYPE_REF;
    public $class = '';
    public $value;
    public $cut = 0;
    public $handle = 0;
    public $refCount = 0;
    public $position = 0;
    public $attr = [];

<<<<<<< HEAD
    private static array $defaultProperties = [];

    /**
     * @internal
     */
    public function __sleep(): array
    {
        $properties = [];

        if (!isset(self::$defaultProperties[$c = static::class])) {
            $reflection = new \ReflectionClass($c);
            self::$defaultProperties[$c] = [];

            foreach ($reflection->getProperties() as $p) {
                if ($p->isStatic()) {
                    continue;
                }

                self::$defaultProperties[$c][$p->name] = $p->hasDefaultValue() ? $p->getDefaultValue() : ($p->hasType() ? NoDefault::NoDefault : null);
            }
        }

        foreach (self::$defaultProperties[$c] as $k => $v) {
            if (NoDefault::NoDefault === $v || $this->$k !== $v) {
                $properties[] = $k;
            }
        }

        return $properties;
=======
    /**
     * @internal
     */
    protected static array $propertyDefaults = [];

    public function __serialize(): array
    {
        static $noDefault = new \stdClass();

        if (self::class === static::class) {
            $data = [];
            foreach ($this as $k => $v) {
                $default = self::$propertyDefaults[$this::class][$k] ??= ($p = new \ReflectionProperty($this, $k))->hasDefaultValue() ? $p->getDefaultValue() : ($p->hasType() ? $noDefault : null);
                if ($noDefault === $default || $default !== $v) {
                    $data[$k] = $v;
                }
            }

            return $data;
        }

        return \Closure::bind(function () use ($noDefault) {
            $data = [];
            foreach ($this as $k => $v) {
                $default = self::$propertyDefaults[$this::class][$k] ??= ($p = new \ReflectionProperty($this, $k))->hasDefaultValue() ? $p->getDefaultValue() : ($p->hasType() ? $noDefault : null);
                if ($noDefault === $default || $default !== $v) {
                    $data[$k] = $v;
                }
            }

            return $data;
        }, $this, $this::class)();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
