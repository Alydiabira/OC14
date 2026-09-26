<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

use function file_exists;
use function file_get_contents;
use function file_put_contents;
<<<<<<< HEAD
use function get_class;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function serialize;
use function unserialize;

/**
 * Proxy reference repository
 *
 * Allow data fixture references and identities to be persisted when cached data fixtures
 * are pre-loaded, for example, by LiipFunctionalTestBundle\Test\WebTestCase loadFixtures().
 */
class ProxyReferenceRepository extends ReferenceRepository
{
    /**
     * Serialize reference repository
<<<<<<< HEAD
     *
     * @return string
     */
    public function serialize()
    {
        $unitOfWork       = $this->getManager()->getUnitOfWork();
        $simpleReferences = [];

        foreach ($this->getReferences() as $name => $reference) {
            $className = $this->getRealClass(get_class($reference));

            $simpleReferences[$name] = [$className, $this->getIdentifier($reference, $unitOfWork)];
        }

        return serialize([
            'references' => $simpleReferences, // For BC, remove in next major.
            'identities' => $this->getIdentities(), // For BC, remove in next major.
=======
     */
    public function serialize(): string
    {
        return serialize([
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'identitiesByClass' => $this->getIdentitiesByClass(),
        ]);
    }

    /**
     * Unserialize reference repository
     *
     * @param string $serializedData Serialized data
<<<<<<< HEAD
     *
     * @return void
     */
    public function unserialize($serializedData)
    {
        $repositoryData = unserialize($serializedData);

        // For BC, remove in next major.
        if (! isset($repositoryData['identitiesByClass'])) {
            $references = $repositoryData['references'];

            foreach ($references as $name => $proxyReference) {
                $this->setReference(
                    $name,
                    $this->getManager()->getReference(
                        $proxyReference[0], // entity class name
                        $proxyReference[1],  // identifiers
                    ),
                );
            }

            $identities = $repositoryData['identities'];

            foreach ($identities as $name => $identity) {
                $this->setReferenceIdentity($name, $identity);
            }

            return;
        }

=======
     */
    public function unserialize(string $serializedData): void
    {
        $repositoryData = unserialize($serializedData);

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        foreach ($repositoryData['identitiesByClass'] as $className => $identities) {
            foreach ($identities as $name => $identity) {
                $this->setReference(
                    $name,
                    $this->getManager()->getReference(
                        $className,
                        $identity,
                    ),
                );

                $this->setReferenceIdentity($name, $identity, $className);
            }
        }
    }

    /**
     * Load data fixture reference repository
     *
     * @param string $baseCacheName Base cache name
<<<<<<< HEAD
     *
     * @return bool
     */
    public function load($baseCacheName)
=======
     */
    public function load(string $baseCacheName): bool
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $filename = $baseCacheName . '.ser';

        if (! file_exists($filename)) {
            return false;
        }

        $serializedData = file_get_contents($filename);

        if ($serializedData === false) {
            return false;
        }

        $this->unserialize($serializedData);

        return true;
    }

    /**
     * Save data fixture reference repository
     *
     * @param string $baseCacheName Base cache name
<<<<<<< HEAD
     *
     * @return void
     */
    public function save($baseCacheName)
=======
     */
    public function save(string $baseCacheName): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $serializedData = $this->serialize();

        file_put_contents($baseCacheName . '.ser', $serializedData);
    }
}
