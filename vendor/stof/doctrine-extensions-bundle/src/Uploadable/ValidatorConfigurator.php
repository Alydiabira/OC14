<?php

namespace Stof\DoctrineExtensionsBundle\Uploadable;

use Gedmo\Uploadable\Mapping\Validator;

/**
 * @internal
 */
class ValidatorConfigurator
{
<<<<<<< HEAD
    private $validateWritableDirectory;

    /**
     * @param bool $validateWritableDirectory
     */
    public function __construct($validateWritableDirectory)
=======
    private bool $validateWritableDirectory;

    public function __construct(bool $validateWritableDirectory)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->validateWritableDirectory = $validateWritableDirectory;
    }

<<<<<<< HEAD
    public function configure()
=======
    public function configure(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        Validator::$validateWritableDirectory = $this->validateWritableDirectory;
    }
}
