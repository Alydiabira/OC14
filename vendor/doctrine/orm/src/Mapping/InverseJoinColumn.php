<?php

declare(strict_types=1);

<<<<<<< HEAD

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
namespace Doctrine\ORM\Mapping;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class InverseJoinColumn implements MappingAttribute
{
    use JoinColumnProperties;
}
