<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Filter;

use function array_map;
use function array_merge;
use function in_array;
<<<<<<< HEAD
use function spl_object_hash;
=======
use function spl_object_id;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use PHPUnit\Framework\TestSuite;
use RecursiveFilterIterator;
use RecursiveIterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends RecursiveFilterIterator
{
    /**
<<<<<<< HEAD
     * @var string[]
=======
     * @var int[]
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    protected $groupTests = [];

    public function __construct(RecursiveIterator $iterator, array $groups, TestSuite $suite)
    {
        parent::__construct($iterator);

        foreach ($suite->getGroupDetails() as $group => $tests) {
            if (in_array((string) $group, $groups, true)) {
<<<<<<< HEAD
                $testHashes = array_map(
                    'spl_object_hash',
                    $tests,
                );

                $this->groupTests = array_merge($this->groupTests, $testHashes);
=======
                $testIds = array_map(
                    'spl_object_id',
                    $tests,
                );

                $this->groupTests = array_merge($this->groupTests, $testIds);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }

    public function accept(): bool
    {
        $test = $this->getInnerIterator()->current();

        if ($test instanceof TestSuite) {
            return true;
        }

<<<<<<< HEAD
        return $this->doAccept(spl_object_hash($test));
    }

    abstract protected function doAccept(string $hash);
=======
        return $this->doAccept(spl_object_id($test));
    }

    abstract protected function doAccept(int $id);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
