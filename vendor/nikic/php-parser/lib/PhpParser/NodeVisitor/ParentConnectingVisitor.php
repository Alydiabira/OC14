<?php declare(strict_types=1);

namespace PhpParser\NodeVisitor;

use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

use function array_pop;
use function count;

/**
 * Visitor that connects a child node to its parent node.
 *
<<<<<<< HEAD
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
=======
 * With <code>$weakReferences=false</code> on the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 *
 * With <code>$weakReferences=true</code> the attribute name is "weak_parent" instead.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
final class ParentConnectingVisitor extends NodeVisitorAbstract {
    /**
     * @var Node[]
     */
    private array $stack = [];

<<<<<<< HEAD
=======
    private bool $weakReferences;

    public function __construct(bool $weakReferences = false) {
        $this->weakReferences = $weakReferences;
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function beforeTraverse(array $nodes) {
        $this->stack = [];
    }

    public function enterNode(Node $node) {
        if (!empty($this->stack)) {
<<<<<<< HEAD
            $node->setAttribute('parent', $this->stack[count($this->stack) - 1]);
=======
            $parent = $this->stack[count($this->stack) - 1];
            if ($this->weakReferences) {
                $node->setAttribute('weak_parent', \WeakReference::create($parent));
            } else {
                $node->setAttribute('parent', $parent);
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->stack[] = $node;
    }

    public function leaveNode(Node $node) {
        array_pop($this->stack);
    }
}
