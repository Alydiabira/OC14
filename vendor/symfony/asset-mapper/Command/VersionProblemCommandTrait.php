<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\Command;

use Symfony\Component\AssetMapper\ImportMap\ImportMapVersionChecker;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @internal
 */
trait VersionProblemCommandTrait
{
    private function renderVersionProblems(ImportMapVersionChecker $importMapVersionChecker, OutputInterface $output): void
    {
        $problems = $importMapVersionChecker->checkVersions();
        foreach ($problems as $problem) {
            if (null === $problem->installedVersion) {
<<<<<<< HEAD
                $output->writeln(sprintf('[warning] <info>%s</info> requires <info>%s</info> but it is not in the importmap.php. You may need to run "php bin/console importmap:require %s".', $problem->packageName, $problem->dependencyPackageName, $problem->dependencyPackageName));
=======
                $output->writeln(\sprintf('[warning] <info>%s</info> requires <info>%s</info> but it is not in the importmap.php. You may need to run "php bin/console importmap:require %s".', $problem->packageName, $problem->dependencyPackageName, $problem->dependencyPackageName));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                continue;
            }

<<<<<<< HEAD
            $output->writeln(sprintf('[warning] <info>%s</info> requires <info>%s</info>@<comment>%s</comment> but version <comment>%s</comment> is installed.', $problem->packageName, $problem->dependencyPackageName, $problem->requiredVersionConstraint, $problem->installedVersion));
=======
            $output->writeln(\sprintf('[warning] <info>%s</info> requires <info>%s</info>@<comment>%s</comment> but version <comment>%s</comment> is installed.', $problem->packageName, $problem->dependencyPackageName, $problem->requiredVersionConstraint, $problem->installedVersion));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
