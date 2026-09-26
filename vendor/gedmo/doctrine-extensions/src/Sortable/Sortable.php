<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sortable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Sortable
=======
 * Marker interface for objects which can be identified as sortable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Lukas Botsch <lukas.botsch@gmail.com>
 */
interface Sortable
{
    // use now annotations instead of predefined methods, this interface is not necessary

    /*
<<<<<<< HEAD
     * @gedmo:SortablePosition - to mark property which will hold the item position use annotation @gedmo:SortablePosition
=======
     * @Gedmo\SortablePosition - to mark property which will hold the item position use annotation @Gedmo\SortablePosition
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *              This property has to be numeric. The position index can be negative and will be counted from right to left.
     *
     * example:
     *
<<<<<<< HEAD
     * @gedmo:SortablePosition
     * @Column(type="int")
     * $position
     *
     * @gedmo:SortableGroup
=======
     * @Gedmo\SortablePosition
     * @Column(type="int")
     * $position
     *
     * @Gedmo\SortableGroup
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="string", length=64)
     * $category
     *
     */

    /*
<<<<<<< HEAD
     * @gedmo:SortableGroup - to group node sorting by a property use annotation @gedmo:SortableGroup on this property
     *
     * example:
     *
     * @gedmo:SortableGroup
=======
     * @Gedmo\SortableGroup - to group node sorting by a property use annotation @Gedmo\SortableGroup on this property
     *
     * example:
     *
     * @Gedmo\SortableGroup
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="string", length=64)
     * $category
     */
}
