<?php

namespace Stof\DoctrineExtensionsBundle\Uploadable;

use Symfony\Component\HttpFoundation\File\UploadedFile;
<<<<<<< HEAD
=======
use Gedmo\Uploadable\FileInfo\FileInfoInterface;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gedmo\Uploadable\UploadableListener;

class UploadableManager
{
<<<<<<< HEAD
    /** @var \Gedmo\Uploadable\UploadableListener */
    private $listener;
    private $fileInfoClass;

    public function __construct(UploadableListener $listener, $fileInfoClass)
=======
    private UploadableListener $listener;
    /** @var class-string<FileInfoInterface> */
    private string $fileInfoClass;

    /**
     * @param class-string<FileInfoInterface> $fileInfoClass
     */
    public function __construct(UploadableListener $listener, string $fileInfoClass)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->listener = $listener;
        $this->fileInfoClass = $fileInfoClass;
    }

    /**
     * This method marks an entity to be uploaded as soon as the "flush" method of your object manager is called.
     * After calling this method, the file info you passed is set for this entity in the listener. This is all it takes
     * to upload a file for an entity in the Uploadable extension.
     *
     * @param object $entity   - The entity you are marking to "Upload" as soon as you call "flush".
     * @param mixed  $fileInfo - The file info object or array. In Symfony, this will be typically an UploadedFile instance.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function markEntityToUpload($entity, $fileInfo)
    {
        if (is_object($fileInfo) && $fileInfo instanceof UploadedFile) {
            $fileInfoClass = $this->fileInfoClass;

            $fileInfo = new $fileInfoClass($fileInfo);
        }

        $this->listener->addEntityFileInfo($entity, $fileInfo);
    }

    /**
     * @return \Gedmo\Uploadable\UploadableListener
     */
    public function getUploadableListener()
    {
        return $this->listener;
    }
<<<<<<< HEAD

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
