<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\NodeAbstract;

class Param extends NodeAbstract {
    /** @var null|Identifier|Name|ComplexType Type declaration */
    public ?Node $type;
    /** @var bool Whether parameter is passed by reference */
    public bool $byRef;
    /** @var bool Whether this is a variadic argument */
    public bool $variadic;
    /** @var Expr\Variable|Expr\Error Parameter variable */
    public Expr $var;
    /** @var null|Expr Default value */
    public ?Expr $default;
    /** @var int Optional visibility flags */
    public int $flags;
    /** @var AttributeGroup[] PHP attribute groups */
    public array $attrGroups;
<<<<<<< HEAD
=======
    /** @var PropertyHook[] Property hooks for promoted properties */
    public array $hooks;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Constructs a parameter node.
     *
     * @param Expr\Variable|Expr\Error $var Parameter variable
     * @param null|Expr $default Default value
     * @param null|Identifier|Name|ComplexType $type Type declaration
     * @param bool $byRef Whether is passed by reference
     * @param bool $variadic Whether this is a variadic argument
     * @param array<string, mixed> $attributes Additional attributes
     * @param int $flags Optional visibility flags
     * @param list<AttributeGroup> $attrGroups PHP attribute groups
<<<<<<< HEAD
=======
     * @param PropertyHook[] $hooks Property hooks for promoted properties
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function __construct(
        Expr $var, ?Expr $default = null, ?Node $type = null,
        bool $byRef = false, bool $variadic = false,
        array $attributes = [],
        int $flags = 0,
<<<<<<< HEAD
        array $attrGroups = []
=======
        array $attrGroups = [],
        array $hooks = []
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ) {
        $this->attributes = $attributes;
        $this->type = $type;
        $this->byRef = $byRef;
        $this->variadic = $variadic;
        $this->var = $var;
        $this->default = $default;
        $this->flags = $flags;
        $this->attrGroups = $attrGroups;
<<<<<<< HEAD
    }

    public function getSubNodeNames(): array {
        return ['attrGroups', 'flags', 'type', 'byRef', 'variadic', 'var', 'default'];
=======
        $this->hooks = $hooks;
    }

    public function getSubNodeNames(): array {
        return ['attrGroups', 'flags', 'type', 'byRef', 'variadic', 'var', 'default', 'hooks'];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getType(): string {
        return 'Param';
    }

    /**
     * Whether this parameter uses constructor property promotion.
     */
    public function isPromoted(): bool {
<<<<<<< HEAD
        return $this->flags !== 0;
    }

    public function isPublic(): bool {
        return (bool) ($this->flags & Modifiers::PUBLIC);
=======
        return $this->flags !== 0 || $this->hooks !== [];
    }

    public function isFinal(): bool {
        return (bool) ($this->flags & Modifiers::FINAL);
    }

    public function isPublic(): bool {
        $public = (bool) ($this->flags & Modifiers::PUBLIC);
        if ($public) {
            return true;
        }

        if (!$this->isPromoted()) {
            return false;
        }

        return ($this->flags & Modifiers::VISIBILITY_MASK) === 0;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function isProtected(): bool {
        return (bool) ($this->flags & Modifiers::PROTECTED);
    }

    public function isPrivate(): bool {
        return (bool) ($this->flags & Modifiers::PRIVATE);
    }

    public function isReadonly(): bool {
        return (bool) ($this->flags & Modifiers::READONLY);
    }
<<<<<<< HEAD
=======

    /**
     * Whether the promoted property has explicit public(set) visibility.
     */
    public function isPublicSet(): bool {
        return (bool) ($this->flags & Modifiers::PUBLIC_SET);
    }

    /**
     * Whether the promoted property has explicit protected(set) visibility.
     */
    public function isProtectedSet(): bool {
        return (bool) ($this->flags & Modifiers::PROTECTED_SET);
    }

    /**
     * Whether the promoted property has explicit private(set) visibility.
     */
    public function isPrivateSet(): bool {
        return (bool) ($this->flags & Modifiers::PRIVATE_SET);
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
