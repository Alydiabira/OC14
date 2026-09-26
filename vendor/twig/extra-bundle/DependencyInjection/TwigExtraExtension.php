<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extra\TwigExtraBundle\DependencyInjection;

use League\CommonMark\CommonMarkConverter;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Twig\Extra\TwigExtraBundle\Extensions;

<<<<<<< HEAD
=======
if (!method_exists(ContainerBuilder::class, 'getAutoconfiguredAttributes')) {
    /** @internal */
    trait TwigExtraExtensionTrait
    {
        public function load(array $configs, ContainerBuilder $container): void
        {
            $this->doLoad($configs, $container);
        }
    }
} else {
    /** @internal */
    trait TwigExtraExtensionTrait
    {
        /** @return void */
        public function load(array $configs, ContainerBuilder $container)
        {
            $this->doLoad($configs, $container);
        }
    }
}

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigExtraExtension extends Extension
{
<<<<<<< HEAD
    /** @return void */
    public function load(array $configs, ContainerBuilder $container)
=======
    use TwigExtraExtensionTrait;

    private function doLoad(array $configs, ContainerBuilder $container): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $loader = new PhpFileLoader($container, new FileLocator(\dirname(__DIR__).'/Resources/config'));
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        if ($container->getParameter('kernel.debug')) {
            $loader->load('suggestor.php');
        }

        foreach (array_keys(Extensions::getClasses()) as $extension) {
            if ($this->isConfigEnabled($container, $config[$extension])) {
                $loader->load($extension.'.php');

                if ('markdown' === $extension && class_exists(CommonMarkConverter::class)) {
                    $loader->load('markdown_league.php');
<<<<<<< HEAD
=======

                    if ($container->hasDefinition('twig.markdown.league_common_mark_converter_factory')) {
                        $container
                            ->getDefinition('twig.markdown.league_common_mark_converter_factory')
                            ->setArgument('$config', $config['commonmark'] ?? []);
                    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        }
    }
}
