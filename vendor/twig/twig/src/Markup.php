<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Marks a content as safe.
 *
<<<<<<< HEAD
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Markup implements \Countable, \JsonSerializable
{
    private $content;
    private $charset;
=======
 * Instances of this class (and existing subclasses) are trusted by the Twig
 * sandbox: method calls and property accesses on a Markup instance bypass the
 * SecurityPolicy method/property allowlists. This is by design: Markup
 * represents content that has already been deemed safe to output.
 *
 * This class is considered final as of Twig 3.28 and will be final in Twig
 * 4.0.
 *
 * @final since Twig 3.28
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Markup implements \Countable, \JsonSerializable, \Stringable
{
    private $content;
    private ?string $charset;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    public function __construct($content, $charset)
    {
        $this->content = (string) $content;
        $this->charset = $charset;
    }

<<<<<<< HEAD
    public function __toString()
=======
    public function __toString(): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->content;
    }

<<<<<<< HEAD
=======
    public function getCharset(): string
    {
        return $this->charset;
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return mb_strlen($this->content, $this->charset);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->content;
    }
}
