<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\IpTraceable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * IpTraceable
=======
 * Marker interface for objects which can be identified as IP traceable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Pierre-Charles Bertineau <pc.bertineau@alterphp.com>
 */
interface IpTraceable
{
    // ipTraceable expects annotations on properties

    /*
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="create")
=======
     * @Gedmo\IpTraceable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * strings which should be updated on insert only
     */

    /*
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="update")
=======
     * @Gedmo\IpTraceable(on="update")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * strings which should be updated on update and insert
     */

    /*
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="change", field="field", value="value")
=======
     * @Gedmo\IpTraceable(on="change", field="field", value="value")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * strings which should be updated on changed "property"
     * value and become equal to given "value"
     */

    /*
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="change", field="field")
=======
     * @Gedmo\IpTraceable(on="change", field="field")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * strings which should be updated on changed "property"
     */

    /*
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="change", fields={"field1", "field2"})
=======
     * @Gedmo\IpTraceable(on="change", fields={"field1", "field2"})
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * strings which should be updated if at least one of the given fields changed
     */

    /*
     * example
     *
<<<<<<< HEAD
     * @gedmo:IpTraceable(on="create")
=======
     * @Gedmo\IpTraceable(on="create")
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="string")
     * $created
     */
}
