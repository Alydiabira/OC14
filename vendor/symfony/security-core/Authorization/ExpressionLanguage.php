<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authorization;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage as BaseExpressionLanguage;

if (!class_exists(BaseExpressionLanguage::class)) {
<<<<<<< HEAD
    throw new \LogicException(sprintf('The "%s" class requires the "ExpressionLanguage" component. Try running "composer require symfony/expression-language".', ExpressionLanguage::class));
=======
    throw new \LogicException(\sprintf('The "%s" class requires the "ExpressionLanguage" component. Try running "composer require symfony/expression-language".', ExpressionLanguage::class));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
} else {
    // Help opcache.preload discover always-needed symbols
    class_exists(ExpressionLanguageProvider::class);

    /**
     * Adds some function to the default ExpressionLanguage.
     *
     * @author Fabien Potencier <fabien@symfony.com>
     *
     * @see ExpressionLanguageProvider
     */
    class ExpressionLanguage extends BaseExpressionLanguage
    {
        public function __construct(?CacheItemPoolInterface $cache = null, array $providers = [])
        {
            // prepend the default provider to let users override it easily
            array_unshift($providers, new ExpressionLanguageProvider());

            parent::__construct($cache, $providers);
        }
    }
}
