<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Test\Traits;

<<<<<<< HEAD
use Symfony\Component\Form\FormRenderer;
use Twig\Environment;
use Twig\RuntimeLoader\RuntimeLoaderInterface;
=======
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\Form\FormRenderer;
use Twig\Environment;
use Twig\RuntimeLoader\ContainerRuntimeLoader;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

trait RuntimeLoaderProvider
{
    protected function registerTwigRuntimeLoader(Environment $environment, FormRenderer $renderer)
    {
<<<<<<< HEAD
        $loader = $this->createMock(RuntimeLoaderInterface::class);
        $loader->expects($this->any())->method('load')->will($this->returnValueMap([
            ['Symfony\Component\Form\FormRenderer', $renderer],
        ]));
        $environment->addRuntimeLoader($loader);
=======
        $environment->addRuntimeLoader(new ContainerRuntimeLoader(new ServiceLocator([
            FormRenderer::class => static fn () => $renderer,
        ])));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
