<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extension;

use Twig\NodeVisitor\YieldNotReadyNodeVisitor;

/**
 * @internal to be removed in Twig 4
 */
final class YieldNotReadyExtension extends AbstractExtension
{
<<<<<<< HEAD
    private $useYield;

    public function __construct(bool $useYield)
    {
        $this->useYield = $useYield;
=======
    public function __construct(
        private bool $useYield,
    ) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function getNodeVisitors(): array
    {
        return [new YieldNotReadyNodeVisitor($this->useYield)];
    }
}
