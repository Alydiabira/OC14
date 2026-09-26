<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Processor;

use Monolog\ResettableInterface;
use Monolog\LogRecord;

/**
 * Adds a unique identifier into records
 *
 * @author Simon Mönch <sm@webfactory.de>
 */
class UidProcessor implements ProcessorInterface, ResettableInterface
{
    /** @var non-empty-string */
    private string $uid;

    /**
     * @param int<1, 32> $length
     */
    public function __construct(int $length = 7)
    {
        if ($length > 32 || $length < 1) {
            throw new \InvalidArgumentException('The uid length must be an integer between 1 and 32');
        }

        $this->uid = $this->generateUid($length);
    }

    /**
     * @inheritDoc
     */
    public function __invoke(LogRecord $record): LogRecord
    {
        $record->extra['uid'] = $this->uid;

        return $record;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function reset(): void
    {
<<<<<<< HEAD
        $this->uid = $this->generateUid(strlen($this->uid));
=======
        $this->uid = $this->generateUid(\strlen($this->uid));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @param  positive-int     $length
     * @return non-empty-string
     */
    private function generateUid(int $length): string
    {
        return substr(bin2hex(random_bytes((int) ceil($length / 2))), 0, $length);
    }
}
