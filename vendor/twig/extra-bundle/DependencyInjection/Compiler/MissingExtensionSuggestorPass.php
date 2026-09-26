<?php

/*
<<<<<<< HEAD
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
=======
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extra\TwigExtraBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
<<<<<<< HEAD
use Twig\Environment;

class MissingExtensionSuggestorPass implements CompilerPassInterface
{
    /** @return void */
    public function process(ContainerBuilder $container)
    {
        if ($container->getParameter('kernel.debug')) {
=======

if (!method_exists(ContainerBuilder::class, 'getAutoconfiguredAttributes')) {
    class MissingExtensionSuggestorPass implements CompilerPassInterface
    {
        public function process(ContainerBuilder $container): void
        {
            if (!$container->getParameter('kernel.debug')) {
                return;
            }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $twigDefinition = $container->getDefinition('twig');
            $twigDefinition
                ->addMethodCall('registerUndefinedFilterCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFilter']])
                ->addMethodCall('registerUndefinedFunctionCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFunction']])
<<<<<<< HEAD
            ;

            // this method was added in Twig 3.2
            if (method_exists(Environment::class, 'registerUndefinedTokenParserCallback')) {
                $twigDefinition->addMethodCall('registerUndefinedTokenParserCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestTag']]);
            }
=======
                ->addMethodCall('registerUndefinedTokenParserCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestTag']])
            ;
        }
    }
} else {
    class MissingExtensionSuggestorPass implements CompilerPassInterface
    {
        /** @return void */
        public function process(ContainerBuilder $container)
        {
            if (!$container->getParameter('kernel.debug')) {
                return;
            }
            $twigDefinition = $container->getDefinition('twig');
            $twigDefinition
                ->addMethodCall('registerUndefinedFilterCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFilter']])
                ->addMethodCall('registerUndefinedFunctionCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFunction']])
                ->addMethodCall('registerUndefinedTokenParserCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestTag']])
            ;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }
}
