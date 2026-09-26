<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\Scheduler\EventListener\DispatchSchedulerEventListener;
use Symfony\Component\Scheduler\Messenger\SchedulerTransportFactory;
use Symfony\Component\Scheduler\Messenger\ServiceCallMessageHandler;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('scheduler.messenger.service_call_message_handler', ServiceCallMessageHandler::class)
            ->args([
                tagged_locator('scheduler.task'),
            ])
            ->tag('messenger.message_handler')
        ->set('scheduler.messenger_transport_factory', SchedulerTransportFactory::class)
            ->args([
                tagged_locator('scheduler.schedule_provider', 'name'),
                service('clock'),
            ])
            ->tag('messenger.transport_factory')
        ->set('scheduler.event_listener', DispatchSchedulerEventListener::class)
            ->args([
                tagged_locator('scheduler.schedule_provider', 'name'),
                service('event_dispatcher'),
<<<<<<< HEAD
=======
                service('messenger.receiver_locator'),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            ])
            ->tag('kernel.event_subscriber')
    ;
};
