<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\SoftDeleteable\Mapping\Event\Adapter;

use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Gedmo\Mapping\Event\Adapter\ODM as BaseAdapterODM;
<<<<<<< HEAD
use Gedmo\SoftDeleteable\Mapping\Event\SoftDeleteableAdapter;
=======
use Gedmo\Mapping\Event\ClockAwareAdapterInterface;
use Gedmo\SoftDeleteable\Mapping\Event\SoftDeleteableAdapter;
use Psr\Clock\ClockInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Doctrine event adapter for ORM adapted
 * for SoftDeleteable behavior.
 *
 * @author David Buchmann <mail@davidbu.ch>
 */
<<<<<<< HEAD
final class ODM extends BaseAdapterODM implements SoftDeleteableAdapter
{
    /**
     * @param ClassMetadata $meta
     */
    public function getDateValue($meta, $field)
    {
        $datetime = new \DateTime();
=======
final class ODM extends BaseAdapterODM implements SoftDeleteableAdapter, ClockAwareAdapterInterface
{
    private ?ClockInterface $clock = null;

    public function setClock(ClockInterface $clock): void
    {
        $this->clock = $clock;
    }

    /**
     * @param ClassMetadata<object> $meta
     */
    public function getDateValue($meta, $field)
    {
        $datetime = $this->clock instanceof ClockInterface ? $this->clock->now() : new \DateTimeImmutable();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $mapping = $meta->getFieldMapping($field);
        $type = $mapping['type'] ?? null;

        if ('timestamp' === $type) {
            return (int) $datetime->format('U');
        }

        if (in_array($type, ['date_immutable', 'time_immutable', 'datetime_immutable', 'datetimetz_immutable'], true)) {
<<<<<<< HEAD
            return \DateTimeImmutable::createFromMutable($datetime);
        }

        return $datetime;
=======
            return $datetime;
        }

        return \DateTime::createFromImmutable($datetime);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
