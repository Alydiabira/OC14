<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Test;

use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Bridge\Twig\Test\Traits\RuntimeLoaderProvider;
use Symfony\Component\Form\FormRenderer;
use Symfony\Component\Form\FormRendererInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
<<<<<<< HEAD
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
=======
use Symfony\Component\Security\Csrf\CsrfTokenManager;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * @author Romain Monteil <monteil.romain@gmail.com>
 */
abstract class FormLayoutTestCase extends FormIntegrationTestCase
{
    use RuntimeLoaderProvider;

    protected FormRendererInterface $renderer;

    protected function setUp(): void
    {
        parent::setUp();

        $loader = new FilesystemLoader($this->getTemplatePaths());

        $environment = new Environment($loader, ['strict_variables' => true]);
        $environment->setExtensions($this->getTwigExtensions());

        foreach ($this->getTwigGlobals() as $name => $value) {
            $environment->addGlobal($name, $value);
        }

        $rendererEngine = new TwigRendererEngine($this->getThemes(), $environment);
<<<<<<< HEAD
        $this->renderer = new FormRenderer($rendererEngine, $this->createMock(CsrfTokenManagerInterface::class));
=======
        $this->renderer = new FormRenderer($rendererEngine, new CsrfTokenManager());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $this->registerTwigRuntimeLoader($environment, $this->renderer);
    }

    protected function assertMatchesXpath($html, $expression, $count = 1): void
    {
<<<<<<< HEAD
        $dom = new \DOMDocument('UTF-8');
=======
        $dom = new \DOMDocument('1.0', 'UTF-8');
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        try {
            // Wrap in <root> node so we can load HTML with multiple tags at
            // the top level
<<<<<<< HEAD
            $dom->loadXML('<root>'.$html.'</root>');
        } catch (\Exception $e) {
            $this->fail(sprintf(
=======
            $loaded = $dom->loadXML('<root>'.$html.'</root>');
        } catch (\Exception $e) {
            $this->fail(\sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                "Failed loading HTML:\n\n%s\n\nError: %s",
                $html,
                $e->getMessage()
            ));
        }
<<<<<<< HEAD
=======

        if (!$loaded) {
            $this->fail(\sprintf("Failed loading HTML:\n\n%s", $html));
        }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $xpath = new \DOMXPath($dom);
        $nodeList = $xpath->evaluate('/root'.$expression);

        if ($nodeList->length != $count) {
            $dom->formatOutput = true;
<<<<<<< HEAD
            $this->fail(sprintf(
=======
            $this->fail(\sprintf(
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                "Failed asserting that \n\n%s\n\nmatches exactly %s. Matches %s in \n\n%s",
                $expression,
                1 == $count ? 'once' : $count.' times',
                1 == $nodeList->length ? 'once' : $nodeList->length.' times',
                // strip away <root> and </root>
                substr($dom->saveHTML(), 6, -8)
            ));
        } else {
            $this->addToAssertionCount(1);
        }
    }

    abstract protected function getTemplatePaths(): array;

    abstract protected function getTwigExtensions(): array;

    protected function getTwigGlobals(): array
    {
        return [];
    }

    abstract protected function getThemes(): array;

    protected function renderForm(FormView $view, array $vars = []): string
    {
        return $this->renderer->renderBlock($view, 'form', $vars);
    }

    protected function renderLabel(FormView $view, $label = null, array $vars = []): string
    {
        if (null !== $label) {
            $vars += ['label' => $label];
        }

        return $this->renderer->searchAndRenderBlock($view, 'label', $vars);
    }

    protected function renderHelp(FormView $view): string
    {
        return $this->renderer->searchAndRenderBlock($view, 'help');
    }

    protected function renderErrors(FormView $view): string
    {
        return $this->renderer->searchAndRenderBlock($view, 'errors');
    }

    protected function renderWidget(FormView $view, array $vars = []): string
    {
        return $this->renderer->searchAndRenderBlock($view, 'widget', $vars);
    }

    protected function renderRow(FormView $view, array $vars = []): string
    {
        return $this->renderer->searchAndRenderBlock($view, 'row', $vars);
    }

    protected function renderRest(FormView $view, array $vars = []): string
    {
        return $this->renderer->searchAndRenderBlock($view, 'rest', $vars);
    }

    protected function renderStart(FormView $view, array $vars = []): string
    {
        return $this->renderer->renderBlock($view, 'form_start', $vars);
    }

    protected function renderEnd(FormView $view, array $vars = []): string
    {
        return $this->renderer->renderBlock($view, 'form_end', $vars);
    }

    protected function setTheme(FormView $view, array $themes, $useDefaultThemes = true): void
    {
        $this->renderer->setTheme($view, $themes, $useDefaultThemes);
    }
}
