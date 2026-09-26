<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\NodeAbstract;

class MatchArm extends NodeAbstract {
    /** @var null|list<Node\Expr> */
    public ?array $conds;
<<<<<<< HEAD
    /** @var Node\Expr */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public Expr $body;

    /**
     * @param null|list<Node\Expr> $conds
     */
    public function __construct(?array $conds, Node\Expr $body, array $attributes = []) {
        $this->conds = $conds;
        $this->body = $body;
        $this->attributes = $attributes;
    }

    public function getSubNodeNames(): array {
        return ['conds', 'body'];
    }

    public function getType(): string {
        return 'MatchArm';
    }
}
