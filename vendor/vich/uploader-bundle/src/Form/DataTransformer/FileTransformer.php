<?php

namespace Vich\UploaderBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

final class FileTransformer implements DataTransformerInterface
{
    /**
     * @param UploadedFile $value
     *
     * @return array<string, UploadedFile>
     */
    public function transform($value): array
    {
        return [
            'file' => $value,
        ];
    }

    /**
<<<<<<< HEAD
     * @param array<string, UploadedFile> $value
=======
     * @param array<string, ?UploadedFile> $value
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function reverseTransform($value): ?UploadedFile
    {
        return $value['file'];
    }
}
