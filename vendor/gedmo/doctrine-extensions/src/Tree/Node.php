<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tree;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Tree Node
=======
 * Marker interface for objects which can be identified as a tree node.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @method void  setSibling(self $node)
 * @method ?self getSibling()
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Node
{
    // use now annotations instead of predefined methods, this interface is not necessary

    /*
<<<<<<< HEAD
     * @gedmo:TreeLeft
     * to mark the field as "tree left" use property annotation @gedmo:TreeLeft
=======
     * @Gedmo\TreeLeft
     * to mark the field as "tree left" use property annotation @Gedmo\TreeLeft
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * it will use this field to store tree left value
     */

    /*
<<<<<<< HEAD
     * @gedmo:TreeRight
     * to mark the field as "tree right" use property annotation @gedmo:TreeRight
=======
     * @Gedmo\TreeRight
     * to mark the field as "tree right" use property annotation @Gedmo\TreeRight
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * it will use this field to store tree right value
     */

    /*
<<<<<<< HEAD
     * @gedmo:TreeParent
=======
     * @Gedmo\TreeParent
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * in every tree there should be link to parent. To identify a relation
     * as parent relation to child use @Tree:Ancestor annotation on the related property
     */

    /*
<<<<<<< HEAD
     * @gedmo:TreeLevel
=======
     * @Gedmo\TreeLevel
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * level of node.
     */

    // @todo: In the next major release, remove this line and uncomment the method in the next line.
    // public function setSibling(self $node): void;

    // @todo: In the next major release, remove this line and uncomment the method in the next line.
    // public function getSibling(): ?self;
}
