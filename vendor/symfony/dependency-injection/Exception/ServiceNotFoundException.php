<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Exception;

use Psr\Container\NotFoundExceptionInterface;

/**
 * This exception is thrown when a non-existent service is requested.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceNotFoundException extends InvalidArgumentException implements NotFoundExceptionInterface
{
    private string $id;
    private ?string $sourceId;
    private array $alternatives;

    public function __construct(string $id, ?string $sourceId = null, ?\Throwable $previous = null, array $alternatives = [], ?string $msg = null)
    {
        if (null !== $msg) {
            // no-op
        } elseif (null === $sourceId) {
<<<<<<< HEAD
            $msg = sprintf('You have requested a non-existent service "%s".', $id);
        } else {
            $msg = sprintf('The service "%s" has a dependency on a non-existent service "%s".', $sourceId, $id);
=======
            $msg = \sprintf('You have requested a non-existent service "%s".', $id);
        } else {
            $msg = \sprintf('The service "%s" has a dependency on a non-existent service "%s".', $sourceId, $id);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if ($alternatives) {
            if (1 == \count($alternatives)) {
                $msg .= ' Did you mean this: "';
            } else {
                $msg .= ' Did you mean one of these: "';
            }
            $msg .= implode('", "', $alternatives).'"?';
        }

        parent::__construct($msg, 0, $previous);

        $this->id = $id;
        $this->sourceId = $sourceId;
        $this->alternatives = $alternatives;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @return array
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }
}
