<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Timestampable\Mapping\Event;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Gedmo\Mapping\Event\AdapterInterface;

/**
 * Doctrine event adapter for the Timestampable extension.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
interface TimestampableAdapter extends AdapterInterface
{
    /**
     * Get the date value.
     *
<<<<<<< HEAD
     * @param ClassMetadata $meta
     * @param string        $field
=======
     * @param ClassMetadata<object> $meta
     * @param string                $field
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @return int|\DateTimeInterface
     */
    public function getDateValue($meta, $field);
}
