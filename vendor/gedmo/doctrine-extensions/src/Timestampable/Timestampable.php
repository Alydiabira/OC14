<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Timestampable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Timestampable
=======
 * Marker interface for objects which can be identified as timestampable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Timestampable
{
    // timestampable expects annotations on properties

    /*
<<<<<<< HEAD
     * @gedmo:Timestampable(on="create")
=======
     * @Gedmo\Timestampable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * dates which should be updated on insert only
     */

    /*
<<<<<<< HEAD
     * @gedmo:Timestampable(on="update")
=======
     * @Gedmo\Timestampable(on="update")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * dates which should be updated on update and insert
     */

    /*
<<<<<<< HEAD
     * @gedmo:Timestampable(on="change", field="field", value="value")
=======
     * @Gedmo\Timestampable(on="change", field="field", value="value")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * dates which should be updated on changed "property"
     * value and become equal to given "value"
     */

    /*
<<<<<<< HEAD
     * @gedmo:Timestampable(on="change", field="field")
=======
     * @Gedmo\Timestampable(on="change", field="field")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * dates which should be updated on changed "property"
     */

    /*
<<<<<<< HEAD
     * @gedmo:Timestampable(on="change", fields={"field1", "field2"})
=======
     * @Gedmo\Timestampable(on="change", fields={"field1", "field2"})
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * dates which should be updated if at least one of the given fields changed
     */

    /*
     * example
     *
<<<<<<< HEAD
     * @gedmo:Timestampable(on="create")
=======
     * @Gedmo\Timestampable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="date")
     * $created
     */
}
