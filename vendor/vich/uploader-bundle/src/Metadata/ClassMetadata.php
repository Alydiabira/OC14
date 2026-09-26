<?php

namespace Vich\UploaderBundle\Metadata;

use Metadata\ClassMetadata as BaseClassMetadata;

/**
 * @internal
 */
final class ClassMetadata extends BaseClassMetadata
{
    public array $fields = [];

    public function serialize(): string
    {
<<<<<<< HEAD
        return \serialize([
            $this->fields,
            parent::serialize(),
        ]);
=======
        return \serialize([$this->fields, parent::serialize()]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function unserialize($str): void
    {
<<<<<<< HEAD
        [
            $this->fields,
            $parentStr
            ] = \unserialize($str);
=======
        [$this->fields, $parentStr] = \unserialize($str);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        parent::unserialize($parentStr);
    }
}
