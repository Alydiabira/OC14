<?php

namespace Vich\UploaderBundle\Metadata\Driver;

use Metadata\ClassMetadata as JMSClassMetadata;
use Metadata\Driver\AbstractFileDriver;
use Symfony\Component\Yaml\Yaml as YmlParser;
use Vich\UploaderBundle\Metadata\ClassMetadata;

/**
 * @author Kévin Gomez <contact@kevingomez.fr>
 * @author Konstantin Myakshin <koc-dp@yandex.ru>
 */
abstract class AbstractYamlDriver extends AbstractFileDriver
{
<<<<<<< HEAD
    /**
     * @param string $file
     */
    protected function loadMetadataFromFile(\ReflectionClass $class, $file): ?JMSClassMetadata
=======
    protected function loadMetadataFromFile(\ReflectionClass $class, string $file): ?JMSClassMetadata
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $config = $this->loadMappingFile($file);
        $className = $this->guessClassName($file, $config, $class);
        $classMetadata = new ClassMetadata($className);
        $classMetadata->fileResources[] = $file;
        $classMetadata->fileResources[] = $class->getFileName();

        foreach ($config[$className] as $field => $mappingData) {
            $fieldMetadata = [
                'mapping' => $mappingData['mapping'],
                'propertyName' => $field,
                'fileNameProperty' => $mappingData['filename_property'] ?? null,
                'size' => $mappingData['size'] ?? null,
                'mimeType' => $mappingData['mime_type'] ?? null,
                'originalName' => $mappingData['original_name'] ?? null,
                'dimensions' => $mappingData['dimensions'] ?? null,
            ];

            $classMetadata->fields[$field] = $fieldMetadata;
        }

        return $classMetadata;
    }

<<<<<<< HEAD
    /**
     * @return mixed
     */
    protected function loadMappingFile(string $file)
=======
    protected function loadMappingFile(string $file): mixed
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return YmlParser::parse(\file_get_contents($file));
    }

<<<<<<< HEAD
    protected function guessClassName(string $file, array $config, \ReflectionClass $class = null): string
=======
    protected function guessClassName(string $file, array $config, ?\ReflectionClass $class = null): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if (null === $class) {
            return \current(\array_keys($config));
        }

        if (!isset($config[$class->name])) {
            throw new \RuntimeException(\sprintf('Expected metadata for class %s to be defined in %s.', $class->name, $file));
        }

        return $class->name;
    }
}
