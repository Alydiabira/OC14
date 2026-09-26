<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

use Symfony\Component\Cache\Marshaller\MarshallerInterface;

/**
 * @author Ahmed TAILOULOUTE <ahmed.tailouloute@gmail.com>
 */
class IdentityMarshaller implements MarshallerInterface
{
    public function marshall(array $values, ?array &$failed): array
    {
        foreach ($values as $key => $value) {
            if (!\is_string($value)) {
<<<<<<< HEAD
                throw new \LogicException(sprintf('%s accepts only string as data.', __METHOD__));
=======
                throw new \LogicException(\sprintf('%s accepts only string as data.', __METHOD__));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        return $values;
    }

    public function unmarshall(string $value): string
    {
        return $value;
    }
}
