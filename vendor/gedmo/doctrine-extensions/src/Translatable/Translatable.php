<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Translatable;

/**
 * This interface is not necessary but can be implemented for
 * Entities which in some cases needs to be identified as
 * Translatable
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface Translatable
{
    // use now annotations instead of predefined methods, this interface is not necessary

    /*
<<<<<<< HEAD
     * @gedmo:TranslationEntity
     * to specify custom translation class use
     * class annotation @gedmo:TranslationEntity(class="your\class")
     */

    /*
     * @gedmo:Translatable
=======
     * @Gedmo\TranslationEntity
     * to specify custom translation class use
     * class annotation @Gedmo\TranslationEntity(class="your\class")
     */

    /*
     * @Gedmo\Translatable
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * to mark the field as translatable,
     * these fields will be translated
     */

    /*
<<<<<<< HEAD
     * @gedmo:Locale OR @gedmo:Language
=======
     * @Gedmo\Locale OR @Gedmo\Language
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * to mark the field as locale used to override global
     * locale settings from TranslatableListener
     */
}
