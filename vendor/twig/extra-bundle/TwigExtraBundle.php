<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extra\TwigExtraBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
<<<<<<< HEAD
use Twig\Extra\TwigExtraBundle\DependencyInjection\Compiler\MissingExtensionSuggestorPass;

class TwigExtraBundle extends Bundle
{
    /** @return void */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MissingExtensionSuggestorPass());
=======
use Symfony\Component\HttpKernel\KernelInterface;
use Twig\Extra\TwigExtraBundle\DependencyInjection\Compiler\MissingExtensionSuggestorPass;

if (method_exists(KernelInterface::class, 'getShareDir')) {
    class TwigExtraBundle extends Bundle
    {
        public function build(ContainerBuilder $container): void
        {
            parent::build($container);

            $container->addCompilerPass(new MissingExtensionSuggestorPass());
        }
    }
} else {
    class TwigExtraBundle extends Bundle
    {
        /** @return void */
        public function build(ContainerBuilder $container)
        {
            parent::build($container);

            $container->addCompilerPass(new MissingExtensionSuggestorPass());
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
