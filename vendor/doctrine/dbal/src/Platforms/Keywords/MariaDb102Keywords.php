<?php

namespace Doctrine\DBAL\Platforms\Keywords;

use Doctrine\Deprecations\Deprecation;

/**
 * MariaDb reserved keywords list.
 *
 * @deprecated Use {@link MariaDBKeywords} instead.
 *
 * @link https://mariadb.com/kb/en/the-mariadb-library/reserved-words/
 */
<<<<<<< HEAD
final class MariaDb102Keywords extends MariaDBKeywords
=======
class MariaDb102Keywords extends MariaDBKeywords
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
{
    /** @deprecated */
    public function getName(): string
    {
        Deprecation::triggerIfCalledFromOutside(
            'doctrine/dbal',
            'https://github.com/doctrine/dbal/pull/5433',
            'MariaDb102Keywords::getName() is deprecated.',
        );

        return 'MariaDb102';
    }
}
