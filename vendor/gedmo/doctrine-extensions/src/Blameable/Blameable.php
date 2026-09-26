<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Blameable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Blameable
=======
 * Marker interface for objects which can be identified as blamable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Blameable
{
    // blameable expects annotations on properties

    /*
<<<<<<< HEAD
     * @gedmo:Blameable(on="create")
=======
     * @Gedmo\Blameable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * fields which should be updated on insert only
     */

    /*
<<<<<<< HEAD
     * @gedmo:Blameable(on="update")
=======
     * @Gedmo\Blameable(on="update")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * fields which should be updated on update and insert
     */

    /*
<<<<<<< HEAD
     * @gedmo:Blameable(on="change", field="field", value="value")
=======
     * @Gedmo\Blameable(on="change", field="field", value="value")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * fields which should be updated on changed "property"
     * value and become equal to given "value"
     */

    /*
<<<<<<< HEAD
     * @gedmo:Blameable(on="change", field="field")
=======
     * @Gedmo\Blameable(on="change", field="field")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * fields which should be updated on changed "property"
     */

    /*
<<<<<<< HEAD
     * @gedmo:Blameable(on="change", fields={"field1", "field2"})
=======
     * @Gedmo\Blameable(on="change", fields={"field1", "field2"})
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * fields which should be updated if at least one of the given fields changed
     */

    /*
     * example
     *
<<<<<<< HEAD
     * @gedmo:Blameable(on="create")
=======
     * @Gedmo\Blameable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="string")
     * $created
     */
}
