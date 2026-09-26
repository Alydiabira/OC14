<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\HttpClient\Test;

use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

class TestHttpServer
{
    private static array $process = [];

    /**
     * @param string|null $workingDirectory
     */
<<<<<<< HEAD
    public static function start(int $port = 8057/* , string $workingDirectory = null */): Process
    {
        $workingDirectory = \func_get_args()[1] ?? __DIR__.'/Fixtures/web';

=======
    public static function start(int $port = 8057/* , ?string $workingDirectory = null */): Process
    {
        $workingDirectory = \func_get_args()[1] ?? __DIR__.'/Fixtures/web';

        if (0 > $port) {
            $port = -$port;
            $ip = '[::1]';
        } else {
            $ip = '127.0.0.1';
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        if (isset(self::$process[$port])) {
            self::$process[$port]->stop();
        } else {
            register_shutdown_function(static function () use ($port) {
                self::$process[$port]->stop();
            });
        }

        $finder = new PhpExecutableFinder();
<<<<<<< HEAD
        $process = new Process(array_merge([$finder->find(false)], $finder->findArguments(), ['-dopcache.enable=0', '-dvariables_order=EGPCS', '-S', '127.0.0.1:'.$port]));
=======
        $process = new Process(array_merge([$finder->find(false) ?: throw new \Exception('PHP executable not found.')], $finder->findArguments(), ['-dopcache.enable=0', '-dvariables_order=EGPCS', '-S', $ip.':'.$port]));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $process->setWorkingDirectory($workingDirectory);
        $process->start();
        self::$process[$port] = $process;

        do {
            usleep(50000);
<<<<<<< HEAD
        } while (!@fopen('http://127.0.0.1:'.$port, 'r'));
=======
        } while (!@fopen('http://'.$ip.':'.$port, 'r'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return $process;
    }

    public static function stop(int $port = 8057)
    {
        if (isset(self::$process[$port])) {
            self::$process[$port]->stop();
        }
    }
}
