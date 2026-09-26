<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Test;

use Symfony\Component\Form\Test\Traits\RunTestTrait;
<<<<<<< HEAD
use Symfony\Component\Form\Tests\VersionAwareTest;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * Base class for performance tests.
 *
 * Copied from Doctrine 2's OrmPerformanceTestCase.
 *
 * @author robo
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class FormPerformanceTestCase extends FormIntegrationTestCase
{
    use RunTestTrait;
<<<<<<< HEAD
    use VersionAwareTest;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * @var int
     */
    protected $maxRunningTime = 0;

    private function doRunTest(): mixed
    {
        $s = microtime(true);
        $result = parent::runTest();
        $time = microtime(true) - $s;

        if (0 != $this->maxRunningTime && $time > $this->maxRunningTime) {
<<<<<<< HEAD
            $this->fail(sprintf('expected running time: <= %s but was: %s', $this->maxRunningTime, $time));
        }

=======
            $this->fail(\sprintf('expected running time: <= %s but was: %s', $this->maxRunningTime, $time));
        }

        $this->expectNotToPerformAssertions();

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return $result;
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function setMaxRunningTime(int $maxRunningTime)
    {
        if ($maxRunningTime < 0) {
            throw new \InvalidArgumentException();
        }

        $this->maxRunningTime = $maxRunningTime;
    }

    public function getMaxRunningTime(): int
    {
        return $this->maxRunningTime;
    }
}
