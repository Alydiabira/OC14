<?php

namespace App;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\XmlDumper;

class KernelDebugDumpPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if ($container->getParameter('kernel.debug')) {
            $dumper = new XmlDumper($container);
            $path = $container->getParameter('kernel.cache_dir') . '/App_KernelDevDebugContainer.xml';
            file_put_contents($path, $dumper->dump());
        }
    }
}
