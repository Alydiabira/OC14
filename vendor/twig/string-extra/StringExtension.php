<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extra\String;

use Symfony\Component\String\AbstractUnicodeString;
<<<<<<< HEAD
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
=======
use Symfony\Component\String\Inflector\EnglishInflector;
use Symfony\Component\String\Inflector\FrenchInflector;
use Symfony\Component\String\Inflector\InflectorInterface;
use Symfony\Component\String\Inflector\SpanishInflector;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Twig\Error\RuntimeError;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class StringExtension extends AbstractExtension
{
    private $slugger;
<<<<<<< HEAD
=======
    private $englishInflector;
    private $spanishInflector;
    private $frenchInflector;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct(?SluggerInterface $slugger = null)
    {
        $this->slugger = $slugger ?: new AsciiSlugger();
    }

<<<<<<< HEAD
    public function getFilters()
=======
    public function getFilters(): array
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return [
            new TwigFilter('u', [$this, 'createUnicodeString']),
            new TwigFilter('slug', [$this, 'createSlug']),
<<<<<<< HEAD
=======
            new TwigFilter('plural', [$this, 'plural']),
            new TwigFilter('singular', [$this, 'singular']),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ];
    }

    public function createUnicodeString(?string $text): UnicodeString
    {
        return new UnicodeString($text ?? '');
    }

    public function createSlug(string $string, string $separator = '-', ?string $locale = null): AbstractUnicodeString
    {
        return $this->slugger->slug($string, $separator, $locale);
    }
<<<<<<< HEAD
=======

    /**
     * @return array|string
     */
    public function plural(string $value, string $locale = 'en', bool $all = false)
    {
        if ($all) {
            return $this->getInflector($locale)->pluralize($value);
        }

        return $this->getInflector($locale)->pluralize($value)[0];
    }

    /**
     * @return array|string
     */
    public function singular(string $value, string $locale = 'en', bool $all = false)
    {
        if ($all) {
            return $this->getInflector($locale)->singularize($value);
        }

        return $this->getInflector($locale)->singularize($value)[0];
    }

    private function getInflector(string $locale): InflectorInterface
    {
        switch ($locale) {
            case 'en':
                return $this->englishInflector ?? $this->englishInflector = new EnglishInflector();
            case 'es':
                if (!class_exists(SpanishInflector::class)) {
                    throw new RuntimeError('SpanishInflector is not available.');
                }

                return $this->spanishInflector ?? $this->spanishInflector = new SpanishInflector();
            case 'fr':
                return $this->frenchInflector ?? $this->frenchInflector = new FrenchInflector();
            default:
                throw new \InvalidArgumentException(\sprintf('Locale "%s" is not supported.', $locale));
        }
    }
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
