<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\SoftDeleteable\Mapping\Event\Adapter;

<<<<<<< HEAD
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\ClassMetadata;
use Gedmo\Mapping\Event\Adapter\ORM as BaseAdapterORM;
use Gedmo\SoftDeleteable\Mapping\Event\SoftDeleteableAdapter;
=======
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\FieldMapping;
use Gedmo\Mapping\Event\Adapter\ORM as BaseAdapterORM;
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
final class ORM extends BaseAdapterORM implements SoftDeleteableAdapter
{
    /**
     * @param ClassMetadata $meta
=======
final class ORM extends BaseAdapterORM implements SoftDeleteableAdapter, ClockAwareAdapterInterface
{
    private ?ClockInterface $clock = null;

    public function setClock(ClockInterface $clock): void
    {
        $this->clock = $clock;
    }

    /**
     * @param ClassMetadata<object> $meta
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getDateValue($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);
<<<<<<< HEAD
        $converter = Type::getType($mapping['type'] ?? Types::DATETIME_MUTABLE);
        $platform = $this->getObjectManager()->getConnection()->getDriver()->getDatabasePlatform();

        return $converter->convertToPHPValue($this->getRawDateValue($mapping), $platform);
=======

        return $this->getObjectManager()->getConnection()->convertToPHPValue(
            $this->getRawDateValue($mapping),
            $mapping instanceof FieldMapping ? $mapping->type : ($mapping['type'] ?? Types::DATETIME_MUTABLE)
        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Generates current timestamp for the specified mapping
     *
<<<<<<< HEAD
     * @param array<string, mixed> $mapping
     *
     * @return \DateTimeInterface|int
     */
    private function getRawDateValue(array $mapping)
    {
        $datetime = new \DateTime();
        $type = $mapping['type'] ?? null;
=======
     * @param array<string, mixed>|FieldMapping $mapping
     *
     * @return \DateTimeInterface|int
     */
    private function getRawDateValue($mapping)
    {
        $datetime = $this->clock instanceof ClockInterface ? $this->clock->now() : new \DateTimeImmutable();
        $type = $mapping instanceof FieldMapping ? $mapping->type : ($mapping['type'] ?? '');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        if ('integer' === $type) {
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
