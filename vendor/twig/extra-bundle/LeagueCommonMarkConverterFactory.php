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

use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Extension\ExtensionInterface;

/**
 * @internal
 */
final class LeagueCommonMarkConverterFactory
{
    private $extensions;
<<<<<<< HEAD
=======
    private $config;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * @param ExtensionInterface[] $extensions
     */
<<<<<<< HEAD
    public function __construct(iterable $extensions)
    {
        $this->extensions = $extensions;
=======
    public function __construct(iterable $extensions, array $config = [])
    {
        $this->extensions = $extensions;
        $this->config = $config;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function __invoke(): CommonMarkConverter
    {
<<<<<<< HEAD
        $converter = new CommonMarkConverter();
=======
        $converter = new CommonMarkConverter($this->config);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        foreach ($this->extensions as $extension) {
            $converter->getEnvironment()->addExtension($extension);
        }

        return $converter;
    }
}
