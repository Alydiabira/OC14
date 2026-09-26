<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Const_ extends Node\Stmt {
    /** @var Node\Const_[] Constant declarations */
    public array $consts;
<<<<<<< HEAD
=======
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public array $attrGroups;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Constructs a const list node.
     *
     * @param Node\Const_[] $consts Constant declarations
     * @param array<string, mixed> $attributes Additional attributes
<<<<<<< HEAD
     */
    public function __construct(array $consts, array $attributes = []) {
        $this->attributes = $attributes;
=======
     * @param list<Node\AttributeGroup> $attrGroups PHP attribute groups
     */
    public function __construct(
        array $consts,
        array $attributes = [],
        array $attrGroups = []
    ) {
        $this->attributes = $attributes;
        $this->attrGroups = $attrGroups;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->consts = $consts;
    }

    public function getSubNodeNames(): array {
<<<<<<< HEAD
        return ['consts'];
=======
        return ['attrGroups', 'consts'];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getType(): string {
        return 'Stmt_Const';
    }
}
