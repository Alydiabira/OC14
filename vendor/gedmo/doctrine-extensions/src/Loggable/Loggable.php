<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Loggable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Domain Objects which in some cases needs to be identified as
 * Loggable
=======
 * Marker interface for objects which can be identified as loggable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Loggable
{
    // this interface is not necessary to implement

    /*
<<<<<<< HEAD
     * @gedmo:Loggable
     * to mark the class as loggable use class annotation @gedmo:Loggable
=======
     * @Gedmo\Loggable
     * to mark the class as loggable use class annotation @Gedmo\Loggable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * this object will contain now a history
     * available options:
     *         logEntryClass="My\LogEntryObject" (optional) defaultly will use internal object class
     * example:
     *
<<<<<<< HEAD
     * @gedmo:Loggable(logEntryClass="My\LogEntryObject")
=======
     * @Gedmo\Loggable(logEntryClass="My\LogEntryObject")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * class MyEntity
     */
}
