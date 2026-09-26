<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Test;

use Composer\Semver\Semver;
<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\MakerBundle\MakerInterface;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Process\Process;

=======
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\MakerBundle\MakerInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Process\Process;

/**
 * @method static iterable<array{0: MakerTestDetails}> getTestDetails()
 */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
abstract class MakerTestCase extends TestCase
{
    private ?KernelInterface $kernel = null;

    /**
     * @dataProvider getTestDetails
     *
     * @return void
     */
<<<<<<< HEAD
=======
    #[DataProvider('getTestDetails')]
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function testExecute(MakerTestDetails $makerTestDetails)
    {
        $this->executeMakerCommand($makerTestDetails);
    }

<<<<<<< HEAD
    abstract public function getTestDetails();

    abstract protected function getMakerClass(): string;

    protected function createMakerTest(): MakerTestDetails
    {
        return new MakerTestDetails($this->getMakerInstance($this->getMakerClass()));
    }

=======
    abstract protected function getMakerClass(): string;

    /**
     * @deprecated Since 1.66.0, use static::buildMakerTest() instead
     */
    protected function createMakerTest(): MakerTestDetails
    {
        trigger_deprecation('symfony/maker-bundle', '1.66.0', 'The "%s()" method is deprecated. Use "self::buildMakerTest()" instead.', __METHOD__, self::class);

        return new MakerTestDetails($this->getMakerInstance($this->getMakerClass()));
    }

    protected static function buildMakerTest(): MakerTestDetails
    {
        return new MakerTestDetails();
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @return void
     */
    protected function executeMakerCommand(MakerTestDetails $testDetails)
    {
        if (!class_exists(Process::class)) {
            throw new \LogicException('The MakerTestCase cannot be run as the Process component is not installed. Try running "compose require --dev symfony/process".');
        }

        if ($testDetails->isTestSkipped() || !$testDetails->isSupportedByCurrentPhpVersion()) {
            $this->markTestSkipped($testDetails->getSkippedTestMessage());
        }

<<<<<<< HEAD
=======
        $testDetails->setMaker($this->getMakerInstance($this->getMakerClass()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $testEnv = MakerTestEnvironment::create($testDetails);

        // prepare environment to test
        $testEnv->prepareDirectory();

        if (!$this->hasRequiredDependencyVersions($testDetails, $testEnv)) {
            $this->markTestSkipped('Some dependencies versions are too low');
        }

        $makerRunner = new MakerTestRunner($testEnv);
        foreach ($testDetails->getPreRunCallbacks() as $preRunCallback) {
            $preRunCallback($makerRunner);
        }

        $callback = $testDetails->getRunCallback();
        $callback($makerRunner);

        // run tests
        $files = $testEnv->getGeneratedFilesFromOutputText();

        foreach ($files as $file) {
<<<<<<< HEAD
            $this->assertTrue($testEnv->fileExists($file), sprintf('The file "%s" does not exist after generation', $file));
=======
            $this->assertTrue($testEnv->fileExists($file), \sprintf('The file "%s" does not exist after generation', $file));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            if (str_ends_with($file, '.twig')) {
                $csProcess = $testEnv->runTwigCSLint($file);

<<<<<<< HEAD
                $this->assertTrue($csProcess->isSuccessful(), sprintf('File "%s" has a twig-cs problem: %s', $file, $csProcess->getErrorOutput()."\n".$csProcess->getOutput()));
=======
                $this->assertTrue($csProcess->isSuccessful(), \sprintf('File "%s" has a twig-cs problem: %s', $file, $csProcess->getErrorOutput()."\n".$csProcess->getOutput()));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }
    }

    /**
     * @return void
<<<<<<< HEAD
     */
    protected function assertContainsCount(string $needle, string $haystack, int $count)
    {
        $this->assertEquals(1, substr_count($haystack, $needle), sprintf('Found more than %d occurrences of "%s" in "%s"', $count, $needle, $haystack));
=======
     *
     * @deprecated since symfony/maker-bundle 1.66.0
     */
    protected function assertContainsCount(string $needle, string $haystack, int $count)
    {
        trigger_deprecation('symfony/maker-bundle', '1.66.0', 'The "%s()" method is deprecated.', __METHOD__, TestCase::class);

        self::assertEquals(1, substr_count($haystack, $needle), \sprintf('Found more than %d occurrences of "%s" in "%s"', $count, $needle, $haystack));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    private function getMakerInstance(string $makerClass): MakerInterface
    {
        if (null === $this->kernel) {
            $this->kernel = $this->createKernel();
            $this->kernel->boot();
        }

<<<<<<< HEAD
        // a cheap way to guess the service id
        $serviceId ??= sprintf('maker.maker.%s', Str::asSnakeCase((new \ReflectionClass($makerClass))->getShortName()));

        return $this->kernel->getContainer()->get($serviceId);
=======
        return $this->kernel->getContainer()->get('maker_locator_for_tests')->get($makerClass);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function createKernel(): KernelInterface
    {
        return new MakerTestKernel('dev', true);
    }

    private function hasRequiredDependencyVersions(MakerTestDetails $testDetails, MakerTestEnvironment $testEnv): bool
    {
        if (empty($testDetails->getRequiredPackageVersions())) {
            return true;
        }

        $installedPackages = json_decode($testEnv->readFile('vendor/composer/installed.json'), true, 512, \JSON_THROW_ON_ERROR);
        $packageVersions = [];

        foreach ($installedPackages['packages'] ?? $installedPackages as $installedPackage) {
            $packageVersions[$installedPackage['name']] = $installedPackage['version_normalized'];
        }

        foreach ($testDetails->getRequiredPackageVersions() as $requiredPackageData) {
            $name = $requiredPackageData['name'];
            $versionConstraint = $requiredPackageData['version_constraint'];

            if (!isset($packageVersions[$name])) {
<<<<<<< HEAD
                throw new \Exception(sprintf('Package "%s" is required in the test project at version "%s" but it is not installed?', $name, $versionConstraint));
=======
                throw new \Exception(\sprintf('Package "%s" is required in the test project at version "%s" but it is not installed?', $name, $versionConstraint));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (!Semver::satisfies($packageVersions[$name], $versionConstraint)) {
                return false;
            }
        }

        return true;
    }
}
