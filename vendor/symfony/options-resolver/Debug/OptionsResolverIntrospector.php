<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\OptionsResolver\Debug;

use Symfony\Component\OptionsResolver\Exception\NoConfigurationException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class OptionsResolverIntrospector
{
    private \Closure $get;

    public function __construct(OptionsResolver $optionsResolver)
    {
        $this->get = \Closure::bind(function ($property, $option, $message) {
            /** @var OptionsResolver $this */
            if (!$this->isDefined($option)) {
<<<<<<< HEAD
                throw new UndefinedOptionsException(sprintf('The option "%s" does not exist.', $option));
=======
                throw new UndefinedOptionsException(\sprintf('The option "%s" does not exist.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }

            if (!\array_key_exists($option, $this->{$property})) {
                throw new NoConfigurationException($message);
            }

            return $this->{$property}[$option];
        }, $optionsResolver, $optionsResolver);
    }

    /**
     * @throws NoConfigurationException on no configured value
     */
    public function getDefault(string $option): mixed
    {
<<<<<<< HEAD
        return ($this->get)('defaults', $option, sprintf('No default value was set for the "%s" option.', $option));
=======
        return ($this->get)('defaults', $option, \sprintf('No default value was set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return \Closure[]
     *
     * @throws NoConfigurationException on no configured closures
     */
    public function getLazyClosures(string $option): array
    {
<<<<<<< HEAD
        return ($this->get)('lazy', $option, sprintf('No lazy closures were set for the "%s" option.', $option));
=======
        return ($this->get)('lazy', $option, \sprintf('No lazy closures were set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return string[]
     *
     * @throws NoConfigurationException on no configured types
     */
    public function getAllowedTypes(string $option): array
    {
<<<<<<< HEAD
        return ($this->get)('allowedTypes', $option, sprintf('No allowed types were set for the "%s" option.', $option));
=======
        return ($this->get)('allowedTypes', $option, \sprintf('No allowed types were set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @return mixed[]
     *
     * @throws NoConfigurationException on no configured values
     */
    public function getAllowedValues(string $option): array
    {
<<<<<<< HEAD
        return ($this->get)('allowedValues', $option, sprintf('No allowed values were set for the "%s" option.', $option));
=======
        return ($this->get)('allowedValues', $option, \sprintf('No allowed values were set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @throws NoConfigurationException on no configured normalizer
     */
    public function getNormalizer(string $option): \Closure
    {
        return current($this->getNormalizers($option));
    }

    /**
     * @throws NoConfigurationException when no normalizer is configured
     */
    public function getNormalizers(string $option): array
    {
<<<<<<< HEAD
        return ($this->get)('normalizers', $option, sprintf('No normalizer was set for the "%s" option.', $option));
=======
        return ($this->get)('normalizers', $option, \sprintf('No normalizer was set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * @throws NoConfigurationException on no configured deprecation
     */
    public function getDeprecation(string $option): array
    {
<<<<<<< HEAD
        return ($this->get)('deprecated', $option, sprintf('No deprecation was set for the "%s" option.', $option));
=======
        return ($this->get)('deprecated', $option, \sprintf('No deprecation was set for the "%s" option.', $option));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
