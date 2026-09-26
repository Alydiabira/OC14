<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Purger;

use Doctrine\ODM\MongoDB\DocumentManager;

<<<<<<< HEAD
/**
 * Class responsible for purging databases of data before reloading data fixtures.
 */
class MongoDBPurger implements PurgerInterface
{
    private ?DocumentManager $dm;
=======
use function method_exists;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 */
final class MongoDBPurger implements MongoDBPurgerInterface
{
    private MongoDBPurgeMode $purgeMode = MongoDBPurgeMode::Drop;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Construct new purger instance.
     *
     * @param DocumentManager|null $dm DocumentManager instance used for persistence.
     */
<<<<<<< HEAD
    public function __construct(?DocumentManager $dm = null)
    {
        $this->dm = $dm;
=======
    public function __construct(private DocumentManager|null $dm = null)
    {
    }

    /**
     * If the purge should be done through collection drop() or deleteMany()
     */
    public function setPurgeMode(MongoDBPurgeMode $mode): void
    {
        $this->purgeMode = $mode;
    }

    public function getPurgeMode(): MongoDBPurgeMode
    {
        return $this->purgeMode;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Set the DocumentManager instance this purger instance should use.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setDocumentManager(DocumentManager $dm)
=======
     */
    public function setDocumentManager(DocumentManager $dm): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->dm = $dm;
    }

    /**
     * Retrieve the DocumentManager instance this purger instance is using.
<<<<<<< HEAD
     *
     * @return DocumentManager
     */
    public function getObjectManager()
=======
     */
    public function getObjectManager(): DocumentManager
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->dm;
    }

<<<<<<< HEAD
    /** @inheritDoc */
    public function purge()
    {
        $metadatas = $this->dm->getMetadataFactory()->getAllMetadata();
        foreach ($metadatas as $metadata) {
=======
    public function purge(): void
    {
        match ($this->purgeMode) {
            MongoDBPurgeMode::Delete => $this->purgeWithDelete(),
            MongoDBPurgeMode::Drop => $this->purgeWithDrop(),
        };
    }

    private function purgeWithDelete(): void
    {
        $allMetadata = $this->dm->getMetadataFactory()->getAllMetadata();
        foreach ($allMetadata as $metadata) {
            if ($metadata->isMappedSuperclass) {
                continue;
            }

            $this->dm->getDocumentCollection($metadata->name)->deleteMany([]);
        }
    }

    private function purgeWithDrop(): void
    {
        $allMetadata = $this->dm->getMetadataFactory()->getAllMetadata();
        foreach ($allMetadata as $metadata) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            if ($metadata->isMappedSuperclass) {
                continue;
            }

            $this->dm->getDocumentCollection($metadata->name)->drop();
        }

<<<<<<< HEAD
        $this->dm->getSchemaManager()->ensureIndexes();
=======
        $schemaManager = $this->dm->getSchemaManager();
        $schemaManager->createCollections();
        $schemaManager->ensureIndexes();

        // Requires doctrine/mongodb-odm 2.8
        // @phpstan-ignore function.alreadyNarrowedType
        method_exists($schemaManager, 'createSearchIndexes') && $schemaManager->createSearchIndexes();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
