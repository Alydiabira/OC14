<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpClient\Internal;

use Amp\Dns;
use Amp\Dns\Record;
use Amp\Promise;
use Amp\Success;

/**
 * Handles local overrides for the DNS resolver.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class AmpResolver implements Dns\Resolver
{
    private array $dnsMap;

    public function __construct(array &$dnsMap)
    {
        $this->dnsMap = &$dnsMap;
    }

    public function resolve(string $name, ?int $typeRestriction = null): Promise
    {
<<<<<<< HEAD
        if (!isset($this->dnsMap[$name]) || !\in_array($typeRestriction, [Record::A, null], true)) {
            return Dns\resolver()->resolve($name, $typeRestriction);
        }

        return new Success([new Record($this->dnsMap[$name], Record::A, null)]);
=======
        $recordType = Record::A;
        $ip = $this->dnsMap[$name] ?? null;

        if (null !== $ip && str_contains($ip, ':')) {
            $recordType = Record::AAAA;
        }
        if (null === $ip || $recordType !== ($typeRestriction ?? $recordType)) {
            return Dns\resolver()->resolve($name, $typeRestriction);
        }

        return new Success([new Record($ip, $recordType, null)]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function query(string $name, int $type): Promise
    {
<<<<<<< HEAD
        if (!isset($this->dnsMap[$name]) || Record::A !== $type) {
            return Dns\resolver()->query($name, $type);
        }

        return new Success([new Record($this->dnsMap[$name], Record::A, null)]);
=======
        $recordType = Record::A;
        $ip = $this->dnsMap[$name] ?? null;

        if (null !== $ip && str_contains($ip, ':')) {
            $recordType = Record::AAAA;
        }
        if (null === $ip || $recordType !== $type) {
            return Dns\resolver()->query($name, $type);
        }

        return new Success([new Record($ip, $recordType, null)]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
