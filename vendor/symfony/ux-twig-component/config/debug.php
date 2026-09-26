<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\TwigComponent\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\UX\TwigComponent\DataCollector\TwigComponentDataCollector;
use Symfony\UX\TwigComponent\EventListener\TwigComponentLoggerListener;

<<<<<<< HEAD
=======
use function Symfony\Component\DependencyInjection\Loader\Configurator\abstract_arg;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $container) {
    $container->services()

        ->set('ux.twig_component.component_logger_listener', TwigComponentLoggerListener::class)
<<<<<<< HEAD
        ->args([
            service('debug.stopwatch')->ignoreOnInvalid(),
        ])
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ->tag('kernel.event_subscriber')

        ->set('ux.twig_component.data_collector', TwigComponentDataCollector::class)
        ->args([
            service('ux.twig_component.component_logger_listener'),
            service('twig'),
<<<<<<< HEAD
=======
            abstract_arg('profiler collect components'),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ])
        ->tag('data_collector', [
            'template' => '@TwigComponent/Collector/twig_component.html.twig',
            'id' => 'twig_component',
            'priority' => 256,
        ]);
};
