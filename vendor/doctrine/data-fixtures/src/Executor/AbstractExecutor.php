<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Executor;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\Purger\PurgerInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\Common\DataFixtures\SharedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Exception;
<<<<<<< HEAD

use function get_class;
=======
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

use function get_debug_type;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function sprintf;

/**
 * Abstract fixture executor.
<<<<<<< HEAD
 */
abstract class AbstractExecutor
{
    /**
     * Purger instance for purging database before loading data fixtures
     *
     * @var PurgerInterface
     */
    protected $purger;

    /**
     * Logger callback for logging messages when loading data fixtures
     *
     * @var callable
     */
    protected $logger;

    /**
     * Fixture reference repository
     *
     * @var ReferenceRepository
     */
    protected $referenceRepository;
=======
 *
 * @internal since 1.8.0
 */
abstract class AbstractExecutor implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * Purger instance for purging database before loading data fixtures
     */
    protected PurgerInterface|null $purger = null;

    /**
     * Fixture reference repository
     */
    protected ReferenceRepository $referenceRepository;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(ObjectManager $manager)
    {
        $this->referenceRepository = new ReferenceRepository($manager);
    }

<<<<<<< HEAD
    /** @return ReferenceRepository */
    public function getReferenceRepository()
=======
    public function getReferenceRepository(): ReferenceRepository
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->referenceRepository;
    }

<<<<<<< HEAD
    public function setReferenceRepository(ReferenceRepository $referenceRepository)
=======
    public function setReferenceRepository(ReferenceRepository $referenceRepository): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->referenceRepository = $referenceRepository;
    }

    /**
     * Sets the Purger instance to use for this executor instance.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setPurger(PurgerInterface $purger)
=======
     */
    public function setPurger(PurgerInterface $purger): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->purger = $purger;
    }

<<<<<<< HEAD
    /** @return PurgerInterface */
    public function getPurger()
=======
    public function getPurger(): PurgerInterface
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->purger;
    }

    /**
<<<<<<< HEAD
     * Set the logger callable to execute with the log() method.
     *
     * @param callable $logger
     *
     * @return void
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * Logs a message using the logger.
     *
     * @param string $message
     *
     * @return void
     */
    public function log($message)
    {
        $logger = $this->logger;
        $logger($message);
    }

    /**
     * Load a fixture with the given persistence manager.
     *
     * @return void
     */
    public function load(ObjectManager $manager, FixtureInterface $fixture)
=======
     * Load a fixture with the given persistence manager.
     */
    public function load(ObjectManager $manager, FixtureInterface $fixture): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ($this->logger) {
            $prefix = '';
            if ($fixture instanceof OrderedFixtureInterface) {
                $prefix = sprintf('[%d] ', $fixture->getOrder());
            }

<<<<<<< HEAD
            $this->log('loading ' . $prefix . get_class($fixture));
=======
            $this->logger->debug('loading ' . $prefix . get_debug_type($fixture));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // additionally pass the instance of reference repository to shared fixtures
        if ($fixture instanceof SharedFixtureInterface) {
            $fixture->setReferenceRepository($this->referenceRepository);
        }

        $fixture->load($manager);
        $manager->clear();
    }

    /**
     * Purges the database before loading.
     *
<<<<<<< HEAD
     * @return void
     *
     * @throws Exception if the purger is not defined.
     */
    public function purge()
=======
     * @throws Exception if the purger is not defined.
     */
    public function purge(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        if ($this->purger === null) {
            throw new Exception(
                PurgerInterface::class .
                 ' instance is required if you want to purge the database before loading your data fixtures.',
            );
        }

<<<<<<< HEAD
        if ($this->logger) {
            $this->log('purging database');
        }
=======
        $this->logger?->debug('purging database');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->purger->purge();
    }

    /**
     * Executes the given array of data fixtures.
     *
     * @param FixtureInterface[] $fixtures Array of fixtures to execute.
     * @param bool               $append   Whether to append the data fixtures or purge the database before loading.
<<<<<<< HEAD
     *
     * @return void
     */
    abstract public function execute(array $fixtures, bool $append = false);
=======
     */
    abstract public function execute(array $fixtures, bool $append = false): void;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
