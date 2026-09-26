<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sluggable;

/**
<<<<<<< HEAD
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Sluggable
=======
 * Marker interface for objects which can be identified as sluggable.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Sluggable
{
    // use now annotations instead of predefined methods, this interface is not necessary

    /*
<<<<<<< HEAD
     * @gedmo:Sluggable
     * to mark the field as sluggable use property annotation @gedmo:Sluggable
=======
     * @Gedmo\Sluggable
     * to mark the field as sluggable use property annotation @Gedmo\Sluggable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * this field value will be included in built slug
     */

    /*
<<<<<<< HEAD
     * @gedmo:Slug - to mark property which will hold slug use annotation @gedmo:Slug
=======
     * @Gedmo\Slug - to mark property which will hold slug use annotation @Gedmo\Slug
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * available options:
     *         updatable (optional, default=true) - true to update the slug on sluggable field changes, false - otherwise
     *         unique (optional, default=true) - true if slug should be unique and if identical it will be prefixed, false - otherwise
     *         unique_base (optional, default="") - used in conjunction with unique. The name of the entity property that should be used as a key when doing a uniqueness check
     *         separator (optional, default="-") - separator which will separate words in slug
     *         prefix (optional, default="") - prefix which will be added to the generated slug
     *         suffix (optional, default="") - suffix which will be added to the generated slug
     *         style (optional, default="default") - "default" all letters will be lowercase, "camel" - first word letter will be uppercase
     *         dateFormat (optional, default="default") - "default" all letters will be lowercase, "camel" - first word letter will be uppercase
<<<<<<< HEAD
     *
     * example:
     *
     * @gedmo:Slug(style="camel", separator="_", prefix="", suffix="", updatable=false, unique=false)
=======
     *         uniqueOverTranslations (optional, default=false) - true if slug should be unique over translations and if identical it will be prefixed, false - otherwise
     *
     * example:
     *
     * @Gedmo\Slug(style="camel", separator="_", prefix="", suffix="", updatable=false, unique=false)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @Column(type="string", length=64)
     * $property
     */
}
