<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Vich\UploaderBundle\FileAbstraction;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
=======
namespace Vich\UploaderBundle\FileAbstraction;

use Symfony\Component\HttpFoundation\File\File;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * This class can be used to signal that the given file should be "uploaded" into the Vich-abstraction
 * in cases where it is not possible to construct an `UploadedFile`.
 */
class ReplacingFile extends File
{
<<<<<<< HEAD
=======
    public function __construct(
        string $path,
        bool $checkPath = true,
        private readonly bool $removeReplacedFile = false,
        private readonly bool $removeReplacedFileOnError = false
    ) {
        parent::__construct($path, $checkPath);
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getClientOriginalName(): string
    {
        return $this->getFilename();
    }
<<<<<<< HEAD
=======

    public function isRemoveReplacedFile(): bool
    {
        return $this->removeReplacedFile;
    }

    public function isRemoveReplacedFileOnError(): bool
    {
        return $this->removeReplacedFileOnError;
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
