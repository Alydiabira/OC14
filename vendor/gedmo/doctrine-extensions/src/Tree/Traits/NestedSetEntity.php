<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tree\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
<<<<<<< HEAD
 * NestedSet Trait, usable with PHP >= 5.4
=======
 * Trait for objects in a nested tree.
 *
 * This implementation provides a mapping configuration for the Doctrine ORM for entities using numeric primary keys.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Renaat De Muynck <renaat.demuynck@gmail.com>
 */
trait NestedSetEntity
{
    /**
     * @var int
     *
     * @Gedmo\TreeRoot
     *
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    #[ORM\Column(name: 'root', type: Types::INTEGER, nullable: true)]
    #[Gedmo\TreeRoot]
    private $root;

    /**
     * @var int
     *
     * @Gedmo\TreeLevel
     *
     * @ORM\Column(name="lvl", type="integer")
     */
    #[ORM\Column(name: 'lvl', type: Types::INTEGER)]
    #[Gedmo\TreeLevel]
    private $level;

    /**
     * @var int
     *
     * @Gedmo\TreeLeft
     *
     * @ORM\Column(name="lft", type="integer")
     */
    #[ORM\Column(name: 'lft', type: Types::INTEGER)]
    #[Gedmo\TreeLeft]
    private $left;

    /**
     * @var int
     *
     * @Gedmo\TreeRight
     *
     * @ORM\Column(name="rgt", type="integer")
     */
    #[ORM\Column(name: 'rgt', type: Types::INTEGER)]
    #[Gedmo\TreeRight]
    private $right;
}
