<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Blameable\Traits;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Types\Type;
use Gedmo\Mapping\Annotation as Gedmo;

/**
<<<<<<< HEAD
 * Blameable Trait, usable with PHP >= 5.4
=======
 * Trait for blamable objects.
 *
 * This implementation provides a mapping configuration for the Doctrine MongoDB ODM.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * @author David Buchmann <mail@davidbu.ch>
 */
trait BlameableDocument
{
    /**
     * @var string
     *
     * @Gedmo\Blameable(on="create")
     *
     * @ODM\Field(type="string")
     */
    #[ODM\Field(type: Type::STRING)]
    #[Gedmo\Blameable(on: 'create')]
    protected $createdBy;

    /**
     * @var string
     *
     * @Gedmo\Blameable(on="update")
     *
     * @ODM\Field(type="string")
     */
    #[ODM\Field(type: Type::STRING)]
    #[Gedmo\Blameable(on: 'update')]
    protected $updatedBy;

    /**
     * Sets createdBy.
     *
     * @param string $createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Returns createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets updatedBy.
     *
     * @param string $updatedBy
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Returns updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
