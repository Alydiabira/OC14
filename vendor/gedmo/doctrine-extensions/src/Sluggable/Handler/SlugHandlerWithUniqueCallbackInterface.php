<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sluggable\Handler;

use Gedmo\Sluggable\Mapping\Event\SluggableAdapter;
<<<<<<< HEAD
=======
use Gedmo\Sluggable\SluggableListener;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * This adds the ability for a slug handler to change the slug just before its
 * uniqueness is ensured. It is also called if the unique options are _not_
 * set.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
<<<<<<< HEAD
=======
 *
 * @phpstan-import-type SlugConfiguration from SluggableListener
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface SlugHandlerWithUniqueCallbackInterface extends SlugHandlerInterface
{
    /**
     * Hook for slug handlers called before it is made unique.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $config
     * @param object               $object
     * @param string               $slug
=======
     * @param SlugConfiguration $config
     * @param object            $object
     * @param string            $slug
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return void
     */
    public function beforeMakingUnique(SluggableAdapter $ea, array &$config, $object, &$slug);
}
