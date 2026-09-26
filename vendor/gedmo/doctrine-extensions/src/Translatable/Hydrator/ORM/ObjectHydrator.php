<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Translatable\Hydrator\ORM;

use Doctrine\ORM\Internal\Hydration\ObjectHydrator as BaseObjectHydrator;
use Gedmo\Exception\RuntimeException;
use Gedmo\Tool\ORM\Hydration\EntityManagerRetriever;
<<<<<<< HEAD
=======
use Gedmo\Tool\ORM\Hydration\HydratorCompat;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gedmo\Translatable\TranslatableListener;

/**
 * If query uses TranslationQueryWalker and is hydrating
 * objects - when it requires this custom object hydrator
 * in order to skip onLoad event from triggering retranslation
 * of the fields
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class ObjectHydrator extends BaseObjectHydrator
{
    use EntityManagerRetriever;
<<<<<<< HEAD
=======
    use HydratorCompat;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * State of skipOnLoad for listener between hydrations
     *
     * @see ObjectHydrator::prepare()
     * @see ObjectHydrator::cleanup()
<<<<<<< HEAD
     *
     * @var bool|null
     */
    private $savedSkipOnLoad;

    /**
     * @return void
     */
    protected function prepare()
=======
     */
    private ?bool $savedSkipOnLoad = null;

    protected function doPrepareWithCompat(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $listener = $this->getTranslatableListener();
        $this->savedSkipOnLoad = $listener->isSkipOnLoad();
        $listener->setSkipOnLoad(true);
        parent::prepare();
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    protected function cleanup()
=======
    protected function doCleanupWithCompat(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        parent::cleanup();
        $listener = $this->getTranslatableListener();
        $listener->setSkipOnLoad($this->savedSkipOnLoad ?? false);
    }

    /**
     * Get the currently used TranslatableListener
     *
     * @throws RuntimeException if listener is not found
     *
     * @return TranslatableListener
     */
    protected function getTranslatableListener()
    {
        foreach ($this->getEntityManager()->getEventManager()->getAllListeners() as $listeners) {
            foreach ($listeners as $listener) {
                if ($listener instanceof TranslatableListener) {
                    return $listener;
                }
            }
        }

        throw new RuntimeException('The translation listener could not be found');
    }
}
