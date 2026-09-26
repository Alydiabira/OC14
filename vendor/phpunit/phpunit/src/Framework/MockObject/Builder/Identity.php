<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Builder;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface Identity
{
    /**
     * Sets the identification of the expectation to $id.
     *
     * @note The identifier is unique per mock object.
     *
     * @param string $id unique identification of expectation
     */
    public function id($id);
}
