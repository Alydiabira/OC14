<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\ReferenceIntegrity;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified te have
 * ReferenceIntegrity checks
=======
 * Marker interface for objects which can be identified as requiring reference integrity checks.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Evert Harmeling <evert.harmeling@freshheads.com>
 */
interface ReferenceIntegrity
{
    /*
     * ReferenceIntegrity expects certain settings to be required
     * in combination with an association
     */

    /*
     * example
     * @ODM\ReferenceOne(targetDocument="Article", nullable="true", mappedBy="type")
     * @Gedmo\ReferenceIntegrity("nullify")
     * @var Article
     */

    /*
     * example
     * @ODM\ReferenceOne(targetDocument="Article", nullable="true", mappedBy="type")
     * @Gedmo\ReferenceIntegrity("restrict")
     * @var Article
     */

    /*
     * example
     * @ODM\ReferenceMany(targetDocument="Article", nullable="true", mappedBy="type")
     * @Gedmo\ReferenceIntegrity("nullify")
     * @var Doctrine\Common\Collections\ArrayCollection
     */

    /*
     * example
     * @ODM\ReferenceMany(targetDocument="Article", nullable="true", mappedBy="type")
     * @Gedmo\ReferenceIntegrity("restrict")
     * @var Doctrine\Common\Collections\ArrayCollection
     */
}
