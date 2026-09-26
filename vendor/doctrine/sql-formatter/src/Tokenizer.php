<?php

declare(strict_types=1);

namespace Doctrine\SqlFormatter;

<<<<<<< HEAD
use function array_combine;
use function array_keys;
use function array_map;
use function arsort;
use function assert;
use function implode;
use function preg_match;
use function preg_quote;
use function str_replace;
use function strlen;
use function strpos;
use function strtoupper;
use function substr;
=======
use function array_key_last;
use function array_map;
use function array_pop;
use function assert;
use function count;
use function implode;
use function is_int;
use function preg_match;
use function preg_quote;
use function reset;
use function str_replace;
use function str_starts_with;
use function strlen;
use function strtoupper;
use function substr;
use function usort;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/** @internal */
final class Tokenizer
{
    /**
     * Reserved words (for syntax highlighting)
     *
     * @var list<string>
     */
    private array $reserved = [
        'ACCESSIBLE',
        'ACTION',
<<<<<<< HEAD
=======
        'ADD',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'AFTER',
        'AGAINST',
        'AGGREGATE',
        'ALGORITHM',
        'ALL',
        'ALTER',
        'ANALYSE',
        'ANALYZE',
<<<<<<< HEAD
=======
        'AND',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'AS',
        'ASC',
        'AUTOCOMMIT',
        'AUTO_INCREMENT',
        'BACKUP',
        'BEGIN',
        'BETWEEN',
<<<<<<< HEAD
        'BINLOG',
        'BOTH',
=======
        'BIGINT',
        'BINARY',
        'BINLOG',
        'BLOB',
        'BOTH',
        'BY',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'CASCADE',
        'CASE',
        'CHANGE',
        'CHANGED',
<<<<<<< HEAD
        'CHARACTER SET',
=======
        'CHAR',
        'CHARACTER',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'CHARSET',
        'CHECK',
        'CHECKSUM',
        'COLLATE',
        'COLLATION',
        'COLUMN',
        'COLUMNS',
        'COMMENT',
        'COMMIT',
        'COMMITTED',
        'COMPRESSED',
        'CONCURRENT',
        'CONSTRAINT',
        'CONTAINS',
        'CONVERT',
        'CREATE',
        'CROSS',
<<<<<<< HEAD
        'CURRENT ROW',
=======
        'CURRENT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'CURRENT_TIMESTAMP',
        'DATABASE',
        'DATABASES',
        'DAY',
        'DAY_HOUR',
        'DAY_MINUTE',
        'DAY_SECOND',
<<<<<<< HEAD
=======
        'DECIMAL',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'DEFAULT',
        'DEFINER',
        'DELAYED',
        'DELETE',
        'DESC',
        'DESCRIBE',
        'DETERMINISTIC',
        'DISTINCT',
        'DISTINCTROW',
        'DIV',
        'DO',
<<<<<<< HEAD
=======
        'DOUBLE',
        'DROP',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'DUMPFILE',
        'DUPLICATE',
        'DYNAMIC',
        'ELSE',
        'ENCLOSED',
        'END',
        'ENGINE',
<<<<<<< HEAD
        'ENGINE_TYPE',
        'ENGINES',
        'ESCAPE',
        'ESCAPED',
        'EVENTS',
=======
        'ENGINES',
        'ENGINE_TYPE',
        'ESCAPE',
        'ESCAPED',
        'EVENTS',
        'EXCEPT',
        'EXCLUDE',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'EXEC',
        'EXECUTE',
        'EXISTS',
        'EXPLAIN',
        'EXTENDED',
<<<<<<< HEAD
        'FAST',
=======
        'FALSE',
        'FAST',
        'FETCH',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'FIELDS',
        'FILE',
        'FILTER',
        'FIRST',
        'FIXED',
<<<<<<< HEAD
        'FLUSH',
        'FOR',
        'FORCE',
        'FOLLOWING',
        'FOREIGN',
=======
        'FLOAT',
        'FLOAT4',
        'FLOAT8',
        'FLUSH',
        'FOLLOWING',
        'FOR',
        'FORCE',
        'FOREIGN',
        'FROM',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'FULL',
        'FULLTEXT',
        'FUNCTION',
        'GLOBAL',
        'GRANT',
        'GRANTS',
        'GROUP',
        'GROUPS',
<<<<<<< HEAD
=======
        'HAVING',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'HEAP',
        'HIGH_PRIORITY',
        'HOSTS',
        'HOUR',
        'HOUR_MINUTE',
        'HOUR_SECOND',
        'IDENTIFIED',
        'IF',
        'IFNULL',
        'IGNORE',
        'IN',
        'INDEX',
        'INDEXES',
        'INFILE',
<<<<<<< HEAD
        'INSERT',
        'INSERT_ID',
        'INSERT_METHOD',
=======
        'INNER',
        'INSERT',
        'INSERT_ID',
        'INSERT_METHOD',
        'INT',
        'INT1',
        'INT2',
        'INT3',
        'INT4',
        'INT8',
        'INTEGER',
        'INTERSECT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'INTERVAL',
        'INTO',
        'INVOKER',
        'IS',
        'ISOLATION',
<<<<<<< HEAD
=======
        'JOIN',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'KEY',
        'KEYS',
        'KILL',
        'LAST_INSERT_ID',
        'LEADING',
<<<<<<< HEAD
        'LEVEL',
        'LIKE',
=======
        'LEFT',
        'LEVEL',
        'LIKE',
        'LIMIT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'LINEAR',
        'LINES',
        'LOAD',
        'LOCAL',
        'LOCK',
        'LOCKS',
        'LOGS',
<<<<<<< HEAD
=======
        'LONG',
        'LONGBLOB',
        'LONGTEXT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'LOW_PRIORITY',
        'MARIA',
        'MASTER',
        'MASTER_CONNECT_RETRY',
        'MASTER_HOST',
        'MASTER_LOG_FILE',
        'MATCH',
        'MAX_CONNECTIONS_PER_HOUR',
        'MAX_QUERIES_PER_HOUR',
        'MAX_ROWS',
        'MAX_UPDATES_PER_HOUR',
        'MAX_USER_CONNECTIONS',
        'MEDIUM',
<<<<<<< HEAD
=======
        'MEDIUMBLOB',
        'MEDIUMINT',
        'MEDIUMTEXT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'MERGE',
        'MINUTE',
        'MINUTE_SECOND',
        'MIN_ROWS',
        'MODE',
<<<<<<< HEAD
=======
        'MODIFY',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'MONTH',
        'MRG_MYISAM',
        'MYISAM',
        'NAMES',
        'NATURAL',
<<<<<<< HEAD
        'NO OTHERS',
        'NOT',
        'NOW()',
        'NULL',
=======
        'NOT',
        'NULL',
        'NUMERIC',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'OFFSET',
        'ON',
        'OPEN',
        'OPTIMIZE',
        'OPTION',
        'OPTIONALLY',
<<<<<<< HEAD
        'ON UPDATE',
        'ON DELETE',
=======
        'OR',
        'ORDER',
        'OUTER',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'OUTFILE',
        'OVER',
        'PACK_KEYS',
        'PAGE',
        'PARTIAL',
        'PARTITION',
        'PARTITIONS',
        'PASSWORD',
        'PRECEDING',
        'PRIMARY',
        'PRIVILEGES',
        'PROCEDURE',
        'PROCESS',
        'PROCESSLIST',
        'PURGE',
        'QUICK',
<<<<<<< HEAD
        'RANGE',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'RAID0',
        'RAID_CHUNKS',
        'RAID_CHUNKSIZE',
        'RAID_TYPE',
<<<<<<< HEAD
        'READ',
        'READ_ONLY',
        'READ_WRITE',
=======
        'RANGE',
        'READ',
        'READ_ONLY',
        'READ_WRITE',
        'REAL',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'RECURSIVE',
        'REFERENCES',
        'REGEXP',
        'RELOAD',
        'RENAME',
        'REPAIR',
        'REPEATABLE',
        'REPLACE',
        'REPLICATION',
        'RESET',
        'RESTORE',
        'RESTRICT',
        'RETURN',
        'RETURNS',
        'REVOKE',
<<<<<<< HEAD
=======
        'RIGHT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'RLIKE',
        'ROLLBACK',
        'ROW',
        'ROWS',
        'ROW_FORMAT',
        'SECOND',
        'SECURITY',
<<<<<<< HEAD
        'SEPARATOR',
        'SERIALIZABLE',
        'SESSION',
=======
        'SELECT',
        'SEPARATOR',
        'SERIALIZABLE',
        'SESSION',
        'SET',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'SHARE',
        'SHOW',
        'SHUTDOWN',
        'SLAVE',
<<<<<<< HEAD
=======
        'SMALLINT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'SONAME',
        'SOUNDS',
        'SQL',
        'SQL_AUTO_IS_NULL',
        'SQL_BIG_RESULT',
        'SQL_BIG_SELECTS',
        'SQL_BIG_TABLES',
        'SQL_BUFFER_RESULT',
<<<<<<< HEAD
=======
        'SQL_CACHE',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'SQL_CALC_FOUND_ROWS',
        'SQL_LOG_BIN',
        'SQL_LOG_OFF',
        'SQL_LOG_UPDATE',
        'SQL_LOW_PRIORITY_UPDATES',
        'SQL_MAX_JOIN_SIZE',
<<<<<<< HEAD
=======
        'SQL_NO_CACHE',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'SQL_QUOTE_SHOW_CREATE',
        'SQL_SAFE_UPDATES',
        'SQL_SELECT_LIMIT',
        'SQL_SLAVE_SKIP_COUNTER',
        'SQL_SMALL_RESULT',
        'SQL_WARNINGS',
<<<<<<< HEAD
        'SQL_CACHE',
        'SQL_NO_CACHE',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'START',
        'STARTING',
        'STATUS',
        'STOP',
        'STORAGE',
        'STRAIGHT_JOIN',
        'STRING',
        'STRIPED',
        'SUPER',
        'TABLE',
        'TABLES',
        'TEMPORARY',
        'TERMINATED',
        'THEN',
        'TIES',
<<<<<<< HEAD
=======
        'TINYBLOB',
        'TINYINT',
        'TINYTEXT',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'TO',
        'TRAILING',
        'TRANSACTIONAL',
        'TRUE',
        'TRUNCATE',
        'TYPE',
        'TYPES',
        'UNBOUNDED',
        'UNCOMMITTED',
<<<<<<< HEAD
        'UNIQUE',
        'UNLOCK',
        'UNSIGNED',
        'USAGE',
        'USE',
        'USING',
        'VARIABLES',
        'VIEW',
        'WHEN',
        'WITH',
        'WORK',
        'WRITE',
=======
        'UNION',
        'UNIQUE',
        'UNLOCK',
        'UNSIGNED',
        'UPDATE',
        'USAGE',
        'USE',
        'USING',
        'VALUES',
        'VARBINARY',
        'VARCHAR',
        'VARCHARACTER',
        'VARIABLES',
        'VIEW',
        'WHEN',
        'WHERE',
        'WINDOW',
        'WITH',
        'WORK',
        'WRITE',
        'XOR',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'YEAR_MONTH',
    ];

    /**
     * For SQL formatting
     * These keywords will all be on their own line
     *
     * @var list<string>
     */
    private array $reservedToplevel = [
<<<<<<< HEAD
        'WITH',
        'SELECT',
        'FROM',
        'WHERE',
        'SET',
        'ORDER BY',
        'GROUP BY',
        'LIMIT',
        'DROP',
        'VALUES',
        'UPDATE',
        'HAVING',
        'ADD',
        'CHANGE',
        'MODIFY',
        'ALTER TABLE',
        'DELETE FROM',
        'UNION ALL',
        'UNION',
        'EXCEPT',
        'INTERSECT',
        'PARTITION BY',
        'ROWS',
        'RANGE',
        'GROUPS',
        'WINDOW',
=======
        'ADD',
        'ALTER TABLE',
        'CHANGE',
        'DELETE FROM',
        'DROP',
        'EXCEPT',
        'FETCH',
        'FROM',
        'GROUP BY',
        'GROUPS',
        'HAVING',
        'INTERSECT',
        'LIMIT',
        'MODIFY',
        'OFFSET',
        'ORDER BY',
        'PARTITION BY',
        'RANGE',
        'ROWS',
        'SELECT',
        'SET',
        'UNION',
        'UNION ALL',
        'UPDATE',
        'VALUES',
        'WHERE',
        'WINDOW',
        'WITH',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ];

    /** @var list<string> */
    private array $reservedNewline = [
<<<<<<< HEAD
        'LEFT OUTER JOIN',
        'RIGHT OUTER JOIN',
        'LEFT JOIN',
        'RIGHT JOIN',
        'OUTER JOIN',
        'INNER JOIN',
        'JOIN',
        'XOR',
        'OR',
        'AND',
        'EXCLUDE',
=======
        'AND',
        'EXCLUDE',
        'INNER JOIN',
        'JOIN',
        'LEFT JOIN',
        'LEFT OUTER JOIN',
        'OR',
        'OUTER JOIN',
        'RIGHT JOIN',
        'RIGHT OUTER JOIN',
        'STRAIGHT_JOIN',
        'XOR',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    ];

    /** @var list<string> */
    private array $functions = [
        'ABS',
        'ACOS',
        'ADDDATE',
        'ADDTIME',
        'AES_DECRYPT',
        'AES_ENCRYPT',
        'APPROX_COUNT_DISTINCT',
        'AREA',
        'ASBINARY',
        'ASCII',
        'ASIN',
        'ASTEXT',
        'ATAN',
        'ATAN2',
        'AVG',
        'BDMPOLYFROMTEXT',
        'BDMPOLYFROMWKB',
        'BDPOLYFROMTEXT',
        'BDPOLYFROMWKB',
        'BENCHMARK',
        'BIN',
        'BIT_AND',
        'BIT_COUNT',
        'BIT_LENGTH',
        'BIT_OR',
        'BIT_XOR',
        'BOUNDARY',
        'BUFFER',
        'CAST',
        'CEIL',
        'CEILING',
        'CENTROID',
<<<<<<< HEAD
        'CHAR',
        'CHARACTER_LENGTH',
        'CHARSET',
=======
        'CHARACTER_LENGTH',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'CHAR_LENGTH',
        'CHECKSUM_AGG',
        'COALESCE',
        'COERCIBILITY',
<<<<<<< HEAD
        'COLLATION',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'COMPRESS',
        'CONCAT',
        'CONCAT_WS',
        'CONNECTION_ID',
<<<<<<< HEAD
        'CONTAINS',
        'CONV',
        'CONVERT',
=======
        'CONV',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'CONVERT_TZ',
        'CONVEXHULL',
        'COS',
        'COT',
        'COUNT',
        'COUNT_BIG',
        'CRC32',
        'CROSSES',
        'CUME_DIST',
        'CURDATE',
        'CURRENT_DATE',
        'CURRENT_TIME',
<<<<<<< HEAD
        'CURRENT_TIMESTAMP',
        'CURRENT_USER',
        'CURTIME',
        'DATABASE',
=======
        'CURRENT_USER',
        'CURTIME',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'DATE',
        'DATEDIFF',
        'DATE_ADD',
        'DATE_DIFF',
        'DATE_FORMAT',
        'DATE_SUB',
<<<<<<< HEAD
        'DAY',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'DAYNAME',
        'DAYOFMONTH',
        'DAYOFWEEK',
        'DAYOFYEAR',
        'DECODE',
<<<<<<< HEAD
        'DEFAULT',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'DEGREES',
        'DENSE_RANK',
        'DES_DECRYPT',
        'DES_ENCRYPT',
        'DIFFERENCE',
        'DIMENSION',
        'DISJOINT',
        'DISTANCE',
        'ELT',
        'ENCODE',
        'ENCRYPT',
        'ENDPOINT',
        'ENVELOPE',
        'EQUALS',
        'EXP',
        'EXPORT_SET',
        'EXTERIORRING',
        'EXTRACT',
        'EXTRACTVALUE',
        'FIELD',
        'FIND_IN_SET',
        'FIRST_VALUE',
        'FLOOR',
        'FORMAT',
        'FOUND_ROWS',
        'FROM_DAYS',
        'FROM_UNIXTIME',
        'GEOMCOLLFROMTEXT',
        'GEOMCOLLFROMWKB',
        'GEOMETRYCOLLECTION',
        'GEOMETRYCOLLECTIONFROMTEXT',
        'GEOMETRYCOLLECTIONFROMWKB',
        'GEOMETRYFROMTEXT',
        'GEOMETRYFROMWKB',
        'GEOMETRYN',
        'GEOMETRYTYPE',
        'GEOMFROMTEXT',
        'GEOMFROMWKB',
        'GET_FORMAT',
        'GET_LOCK',
        'GLENGTH',
        'GREATEST',
        'GROUPING',
        'GROUPING_ID',
        'GROUP_CONCAT',
        'GROUP_UNIQUE_USERS',
        'HEX',
<<<<<<< HEAD
        'HOUR',
        'IF',
        'IFNULL',
        'INET_ATON',
        'INET_NTOA',
        'INSERT',
=======
        'INET_ATON',
        'INET_NTOA',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'INSTR',
        'INTERIORRINGN',
        'INTERSECTION',
        'INTERSECTS',
<<<<<<< HEAD
        'INTERVAL',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'ISCLOSED',
        'ISEMPTY',
        'ISNULL',
        'ISRING',
        'ISSIMPLE',
        'IS_FREE_LOCK',
        'IS_USED_LOCK',
        'LAG',
        'LAST_DAY',
<<<<<<< HEAD
        'LAST_INSERT_ID',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'LAST_VALUE',
        'LCASE',
        'LEAD',
        'LEAST',
<<<<<<< HEAD
        'LEFT',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'LENGTH',
        'LINEFROMTEXT',
        'LINEFROMWKB',
        'LINESTRING',
        'LINESTRINGFROMTEXT',
        'LINESTRINGFROMWKB',
        'LISTAGG',
        'LN',
        'LOAD_FILE',
        'LOCALTIME',
        'LOCALTIMESTAMP',
        'LOCATE',
        'LOG',
        'LOG10',
        'LOG2',
        'LOWER',
        'LPAD',
        'LTRIM',
        'MAKEDATE',
        'MAKETIME',
        'MAKE_SET',
        'MASTER_POS_WAIT',
        'MAX',
        'MBRCONTAINS',
        'MBRDISJOINT',
        'MBREQUAL',
        'MBRINTERSECTS',
        'MBROVERLAPS',
        'MBRTOUCHES',
        'MBRWITHIN',
        'MD5',
        'MICROSECOND',
        'MID',
        'MIN',
<<<<<<< HEAD
        'MINUTE',
        'MLINEFROMTEXT',
        'MLINEFROMWKB',
        'MOD',
        'MONTH',
=======
        'MLINEFROMTEXT',
        'MLINEFROMWKB',
        'MOD',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'MONTHNAME',
        'MPOINTFROMTEXT',
        'MPOINTFROMWKB',
        'MPOLYFROMTEXT',
        'MPOLYFROMWKB',
        'MULTILINESTRING',
        'MULTILINESTRINGFROMTEXT',
        'MULTILINESTRINGFROMWKB',
        'MULTIPOINT',
        'MULTIPOINTFROMTEXT',
        'MULTIPOINTFROMWKB',
        'MULTIPOLYGON',
        'MULTIPOLYGONFROMTEXT',
        'MULTIPOLYGONFROMWKB',
        'NAME_CONST',
<<<<<<< HEAD
=======
        'NOW',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'NTH_VALUE',
        'NTILE',
        'NULLIF',
        'NUMGEOMETRIES',
        'NUMINTERIORRINGS',
        'NUMPOINTS',
        'OCT',
        'OCTET_LENGTH',
        'OLD_PASSWORD',
        'ORD',
        'OVERLAPS',
<<<<<<< HEAD
        'PASSWORD',
        'PERCENT_RANK',
        'PERCENTILE_CONT',
        'PERCENTILE_DISC',
=======
        'PERCENTILE_CONT',
        'PERCENTILE_DISC',
        'PERCENT_RANK',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'PERIOD_ADD',
        'PERIOD_DIFF',
        'PI',
        'POINT',
        'POINTFROMTEXT',
        'POINTFROMWKB',
        'POINTN',
        'POINTONSURFACE',
        'POLYFROMTEXT',
        'POLYFROMWKB',
        'POLYGON',
        'POLYGONFROMTEXT',
        'POLYGONFROMWKB',
        'POSITION',
        'POW',
        'POWER',
        'QUARTER',
        'QUOTE',
        'RADIANS',
        'RAND',
        'RANK',
        'RELATED',
        'RELEASE_LOCK',
        'REPEAT',
<<<<<<< HEAD
        'REPLACE',
        'REVERSE',
        'RIGHT',
=======
        'REVERSE',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'ROUND',
        'ROW_COUNT',
        'ROW_NUMBER',
        'RPAD',
        'RTRIM',
        'SCHEMA',
<<<<<<< HEAD
        'SECOND',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'SEC_TO_TIME',
        'SESSION_USER',
        'SHA',
        'SHA1',
        'SIGN',
        'SIN',
        'SLEEP',
        'SOUNDEX',
        'SPACE',
        'SQRT',
        'SRID',
        'STARTPOINT',
        'STD',
<<<<<<< HEAD
        'STDEV',
        'STDEVP',
        'STDDEV',
        'STDDEV_POP',
        'STDDEV_SAMP',
        'STRING_AGG',
        'STRCMP',
=======
        'STDDEV',
        'STDDEV_POP',
        'STDDEV_SAMP',
        'STDEV',
        'STDEVP',
        'STRCMP',
        'STRING_AGG',
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'STR_TO_DATE',
        'SUBDATE',
        'SUBSTR',
        'SUBSTRING',
        'SUBSTRING_INDEX',
        'SUBTIME',
        'SUM',
        'SYMDIFFERENCE',
        'SYSDATE',
        'SYSTEM_USER',
        'TAN',
        'TIME',
        'TIMEDIFF',
        'TIMESTAMP',
        'TIMESTAMPADD',
        'TIMESTAMPDIFF',
        'TIME_FORMAT',
        'TIME_TO_SEC',
        'TOUCHES',
        'TO_DAYS',
        'TRIM',
<<<<<<< HEAD
        'TRUNCATE',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        'UCASE',
        'UNCOMPRESS',
        'UNCOMPRESSED_LENGTH',
        'UNHEX',
        'UNIQUE_USERS',
        'UNIX_TIMESTAMP',
        'UPDATEXML',
        'UPPER',
        'USER',
        'UTC_DATE',
        'UTC_TIME',
        'UTC_TIMESTAMP',
        'UUID',
        'VAR',
        'VARIANCE',
        'VARP',
        'VAR_POP',
        'VAR_SAMP',
        'VERSION',
        'WEEK',
        'WEEKDAY',
        'WEEKOFYEAR',
        'WITHIN',
        'X',
        'Y',
        'YEAR',
        'YEARWEEK',
    ];

<<<<<<< HEAD
    // Regular expressions for tokenizing

    private readonly string $regexBoundaries;
    private readonly string $regexReserved;
    private readonly string $regexReservedNewline;
    private readonly string $regexReservedToplevel;
    private readonly string $regexFunction;
=======
    /** Regular expression for tokenizing. */
    private readonly string $tokenizeRegex;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Punctuation that can be used as a boundary between other tokens
     *
     * @var list<string>
     */
    private array $boundaries = [
        ',',
        ';',
        '::', // PostgreSQL cast operator
        ':',
        ')',
        '(',
        '.',
        '=',
        '<',
        '>',
        '+',
        '-',
<<<<<<< HEAD
=======
        '~*', // https://www.postgresql.org/docs/current/functions-matching.html#FUNCTIONS-POSIX-REGEXP
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        '*',
        '/',
        '!',
        '^',
        '%',
        '|',
        '&',
        '#',
    ];

    /**
<<<<<<< HEAD
     * Stuff that only needs to be done once. Builds regular expressions and
     * sorts the reserved words.
     */
    public function __construct()
    {
        // Sort reserved word list from longest word to shortest, 3x faster than usort
        $reservedMap = array_combine($this->reserved, array_map(strlen(...), $this->reserved));
        assert($reservedMap !== false);
        arsort($reservedMap);
        $this->reserved = array_keys($reservedMap);

        // Set up regular expressions
        $this->regexBoundaries       = '(' . implode(
            '|',
            $this->quoteRegex($this->boundaries),
        ) . ')';
        $this->regexReserved         = '(' . implode(
            '|',
            $this->quoteRegex($this->reserved),
        ) . ')';
        $this->regexReservedToplevel = str_replace(' ', '\\s+', '(' . implode(
            '|',
            $this->quoteRegex($this->reservedToplevel),
        ) . ')');
        $this->regexReservedNewline  = str_replace(' ', '\\s+', '(' . implode(
            '|',
            $this->quoteRegex($this->reservedNewline),
        ) . ')');

        $this->regexFunction = '(' . implode('|', $this->quoteRegex($this->functions)) . ')';
=======
     * Stuff that only needs to be done once. Builds tokenizing regular expression.
     */
    public function __construct()
    {
        $this->tokenizeRegex = $this->makeTokenizeRegex($this->makeTokenizeRegexes());
    }

    /**
     * Make regex from a list of values matching longest value first.
     *
     * Optimized for speed by matching alternative branch only once
     * https://github.com/PCRE2Project/pcre2/issues/411 .
     *
     * @param list<string> $values
     */
    private function makeRegexFromList(array $values, bool $sorted = false): string
    {
        // sort list alphabetically and from longest word to shortest
        if (! $sorted) {
            usort($values, static function (string $a, string $b) {
                return str_starts_with($a, $b) || str_starts_with($b, $a)
                    ? strlen($b) <=> strlen($a)
                    : $a <=> $b;
            });
        }

        /** @var array<int|string, list<string>> $valuesBySharedPrefix */
        $valuesBySharedPrefix = [];
        $items                = [];
        $prefix               = null;

        foreach ($values as $v) {
            if ($prefix !== null && ! str_starts_with($v, substr($prefix, 0, 1))) {
                $valuesBySharedPrefix[$prefix] = $items;
                $items                         = [];
                $prefix                        = null;
            }

            $items[] = $v;

            if ($prefix === null) {
                $prefix = $v;
            } else {
                while (! str_starts_with($v, $prefix)) {
                    $prefix = substr($prefix, 0, -1);
                }
            }
        }

        if ($items !== []) {
            $valuesBySharedPrefix[(string) $prefix] = $items;
            $items                                  = [];
            $prefix                                 = null;
        }

        $regex = '(?>';

        foreach ($valuesBySharedPrefix as $prefix => $items) {
            if ($regex !== '(?>') {
                $regex .= '|';
            }

            if (is_int($prefix)) {
                $prefix = (string) $prefix;
            }

            $regex .= preg_quote($prefix);

            $regex .= count($items) === 1
                ? preg_quote(substr(reset($items), strlen($prefix)))
                : $this->makeRegexFromList(array_map(static fn ($v) => substr($v, strlen($prefix)), $items), true);
        }

        return $regex . ')';
    }

    /** @return array<Token::TOKEN_TYPE_*, string> */
    private function makeTokenizeRegexes(): array
    {
        // Set up regular expressions
        $regexBoundaries       = $this->makeRegexFromList($this->boundaries);
        $regexReserved         = $this->makeRegexFromList($this->reserved);
        $regexReservedToplevel = str_replace(' ', '\s+', $this->makeRegexFromList($this->reservedToplevel));
        $regexReservedNewline  = str_replace(' ', '\s+', $this->makeRegexFromList($this->reservedNewline));
        $regexFunction         = $this->makeRegexFromList($this->functions);

        return [
            Token::TOKEN_TYPE_WHITESPACE => '\s+',
            Token::TOKEN_TYPE_COMMENT => '(?:--|#(?!>))[^\n]*+', // #>, #>> and <#> are PostgreSQL operators
            Token::TOKEN_TYPE_BLOCK_COMMENT => '/\*(?:[^*]+|\*(?!/))*+(?:\*|$)(?:/|$)',
            // 1. backtick quoted string using `` to escape
            // 2. square bracket quoted string (SQL Server) using ]] to escape
            Token::TOKEN_TYPE_BACKTICK_QUOTE => <<<'EOD'
                (?>(?x)
                    `(?:[^`]+|`(?:`|$))*+(?:`|$)
                    |\[(?:[^\]]+|\](?:\]|$))*+(?:\]|$)
                )
                EOD,
            // 3. double quoted string using "" or \" to escape
            // 4. single quoted string using '' or \' to escape
            Token::TOKEN_TYPE_QUOTE => <<<'EOD'
                (?>(?sx)
                    '(?:[^'\\]+|\\(?:.|$)|'(?:'|$))*+(?:'|$)
                    |"(?:[^"\\]+|\\(?:.|$)|"(?:"|$))*+(?:"|$)
                )
                EOD,
            // User-defined variable, possibly with quoted name
            Token::TOKEN_TYPE_VARIABLE => '[@:](?:[\w.$]++|(?&t_' . Token::TOKEN_TYPE_BACKTICK_QUOTE . ')|(?&t_' . Token::TOKEN_TYPE_QUOTE . '))',
            // decimal, binary, or hex
            Token::TOKEN_TYPE_NUMBER => '(?:\d+(?:\.\d+)?|0x[\da-fA-F]+|0b[01]+)(?=$|\s|"\'`|' . $regexBoundaries . ')',
            // punctuation and symbols
            Token::TOKEN_TYPE_BOUNDARY => $regexBoundaries,
            // A reserved word cannot be preceded by a '.'
            // this makes it so in "mytable.from", "from" is not considered a reserved word
            Token::TOKEN_TYPE_RESERVED_TOPLEVEL => '(?<!\.|\sCHARACTER\s(?=SET\s))' . $regexReservedToplevel . '(?=$|\s|' . $regexBoundaries . ')',
            Token::TOKEN_TYPE_RESERVED_NEWLINE => '(?<!\.)' . $regexReservedNewline . '(?=$|\s|' . $regexBoundaries . ')',
            Token::TOKEN_TYPE_RESERVED => '(?<!\.)' . $regexReserved . '(?=$|\s|' . $regexBoundaries . ')'
                // A function must be succeeded by '('
                // this makes it so "count(" is considered a function, but "count" alone is not function
                . '|' . $regexFunction . '(?=\s*\()',
            Token::TOKEN_TYPE_WORD => '.*?(?=$|\s|["\'`]|' . $regexBoundaries . ')',
        ];
    }

    /** @param array<Token::TOKEN_TYPE_*, string> $regexes */
    private function makeTokenizeRegex(array $regexes): string
    {
        $parts = [];

        foreach ($regexes as $type => $regex) {
            $parts[] = '(?<t_' . $type . '>' . $regex . ')';
        }

        return '(\G(?:' . implode('|', $parts) . '))';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    /**
     * Takes a SQL string and breaks it into tokens.
     * Each token is an associative array with type and value.
     *
     * @param string $string The SQL string
     */
    public function tokenize(string $string): Cursor
    {
<<<<<<< HEAD
        $tokens = [];

        // Used to make sure the string keeps shrinking on each iteration
        $oldStringLen = strlen($string) + 1;

        $token = null;

        $currentLength = strlen($string);

        // Keep processing the string until it is empty
        while ($currentLength) {
            // If the string stopped shrinking, there was a problem
            if ($oldStringLen <= $currentLength) {
                $tokens[] = new Token(Token::TOKEN_TYPE_ERROR, $string);

                return new Cursor($tokens);
            }

            $oldStringLen =  $currentLength;

            // Get the next token and the token type
            $token       = $this->createNextToken($string, $token);
            $tokenLength = strlen($token->value());

            $tokens[] = $token;

            // Advance the string
            $string = substr($string, $tokenLength);

            $currentLength -= $tokenLength;
=======
        $tokenizeRegex = $this->tokenizeRegex;
        $upper         = strtoupper($string);

        $tokens = [];
        $offset = 0;

        while ($offset < strlen($string)) {
            // Get the next token and the token type
            preg_match($tokenizeRegex, $upper, $matches, 0, $offset);
            assert(($matches[0] ?? '') !== '');

            while (is_int($lastMatchesKey = array_key_last($matches))) {
                array_pop($matches);
            }

            assert(str_starts_with($lastMatchesKey, 't_'));

            /** @var Token::TOKEN_TYPE_* $tokenType */
            $tokenType = (int) substr($lastMatchesKey, 2);

            $token = new Token($tokenType, substr($string, $offset, strlen($matches[0])));

            $offset += strlen($token->value());

            $tokens[] = $token;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        return new Cursor($tokens);
    }
<<<<<<< HEAD

    /**
     * Return the next token and token type in a SQL string.
     * Quoted strings, comments, reserved words, whitespace, and punctuation
     * are all their own tokens.
     *
     * @param string     $string   The SQL string
     * @param Token|null $previous The result of the previous createNextToken() call
     *
     * @return Token An associative array containing the type and value of the token.
     */
    private function createNextToken(string $string, Token|null $previous = null): Token
    {
        $matches = [];
        // Whitespace
        if (preg_match('/^\s+/', $string, $matches)) {
            return new Token(Token::TOKEN_TYPE_WHITESPACE, $matches[0]);
        }

        // Comment
        if (
            $string[0] === '#' ||
            (isset($string[1]) && ($string[0] === '-' && $string[1] === '-') ||
            (isset($string[1]) && $string[0] === '/' && $string[1] === '*'))
        ) {
            // Comment until end of line
            if ($string[0] === '-' || $string[0] === '#') {
                $last = strpos($string, "\n");
                $type = Token::TOKEN_TYPE_COMMENT;
            } else { // Comment until closing comment tag
                $pos = strpos($string, '*/', 2);
                assert($pos !== false);
                $last = $pos + 2;
                $type = Token::TOKEN_TYPE_BLOCK_COMMENT;
            }

            if ($last === false) {
                $last = strlen($string);
            }

            return new Token($type, substr($string, 0, $last));
        }

        // Quoted String
        if ($string[0] === '"' || $string[0] === '\'' || $string[0] === '`' || $string[0] === '[') {
            return new Token(
                ($string[0] === '`' || $string[0] === '['
                    ? Token::TOKEN_TYPE_BACKTICK_QUOTE
                    : Token::TOKEN_TYPE_QUOTE),
                $this->getQuotedString($string),
            );
        }

        // User-defined Variable
        if (($string[0] === '@' || $string[0] === ':') && isset($string[1])) {
            $value = null;
            $type  = Token::TOKEN_TYPE_VARIABLE;

            // If the variable name is quoted
            if ($string[1] === '"' || $string[1] === '\'' || $string[1] === '`') {
                $value = $string[0] . $this->getQuotedString(substr($string, 1));
            } else {
                // Non-quoted variable name
                preg_match('/^(' . $string[0] . '[a-zA-Z0-9\._\$]+)/', $string, $matches);
                if ($matches) {
                    $value = $matches[1];
                }
            }

            if ($value !== null) {
                return new Token($type, $value);
            }
        }

        // Number (decimal, binary, or hex)
        if (
            preg_match(
                '/^([0-9]+(\.[0-9]+)?|0x[0-9a-fA-F]+|0b[01]+)($|\s|"\'`|' . $this->regexBoundaries . ')/',
                $string,
                $matches,
            )
        ) {
            return new Token(Token::TOKEN_TYPE_NUMBER, $matches[1]);
        }

        // Boundary Character (punctuation and symbols)
        if (preg_match('/^(' . $this->regexBoundaries . ')/', $string, $matches)) {
            return new Token(Token::TOKEN_TYPE_BOUNDARY, $matches[1]);
        }

        // A reserved word cannot be preceded by a '.'
        // this makes it so in "mytable.from", "from" is not considered a reserved word
        if (! $previous || $previous->value() !== '.') {
            $upper = strtoupper($string);
            // Top Level Reserved Word
            if (
                preg_match(
                    '/^(' . $this->regexReservedToplevel . ')($|\s|' . $this->regexBoundaries . ')/',
                    $upper,
                    $matches,
                )
            ) {
                return new Token(
                    Token::TOKEN_TYPE_RESERVED_TOPLEVEL,
                    substr($upper, 0, strlen($matches[1])),
                );
            }

            // Newline Reserved Word
            if (
                preg_match(
                    '/^(' . $this->regexReservedNewline . ')($|\s|' . $this->regexBoundaries . ')/',
                    $upper,
                    $matches,
                )
            ) {
                return new Token(
                    Token::TOKEN_TYPE_RESERVED_NEWLINE,
                    substr($upper, 0, strlen($matches[1])),
                );
            }

            // Other Reserved Word
            if (
                preg_match(
                    '/^(' . $this->regexReserved . ')($|\s|' . $this->regexBoundaries . ')/',
                    $upper,
                    $matches,
                )
            ) {
                return new Token(
                    Token::TOKEN_TYPE_RESERVED,
                    substr($upper, 0, strlen($matches[1])),
                );
            }
        }

        // A function must be succeeded by '('
        // this makes it so "count(" is considered a function, but "count" alone is not
        $upper = strtoupper($string);
        // function
        if (preg_match('/^(' . $this->regexFunction . '[(]|\s|[)])/', $upper, $matches)) {
            return new Token(
                Token::TOKEN_TYPE_RESERVED,
                substr($upper, 0, strlen($matches[1]) - 1),
            );
        }

        // Non reserved word
        preg_match('/^(.*?)($|\s|["\'`]|' . $this->regexBoundaries . ')/', $string, $matches);

        return new Token(Token::TOKEN_TYPE_WORD, $matches[1]);
    }

    /**
     * Helper function for building regular expressions for reserved words and boundary characters
     *
     * @param string[] $strings The strings to be quoted
     *
     * @return string[] The quoted strings
     */
    private function quoteRegex(array $strings): array
    {
        return array_map(
            static fn (string $string): string => preg_quote($string, '/'),
            $strings,
        );
    }

    private function getQuotedString(string $string): string
    {
        $ret = '';

        // This checks for the following patterns:
        // 1. backtick quoted string using `` to escape
        // 2. square bracket quoted string (SQL Server) using ]] to escape
        // 3. double quoted string using "" or \" to escape
        // 4. single quoted string using '' or \' to escape
        if (
            preg_match(
                '/^(((`[^`]*($|`))+)|
            ((\[[^\]]*($|\]))(\][^\]]*($|\]))*)|
            (("[^"\\\\]*(?:\\\\.[^"\\\\]*)*("|$))+)|
            ((\'[^\'\\\\]*(?:\\\\.[^\'\\\\]*)*(\'|$))+))/sx',
                $string,
                $matches,
            )
        ) {
            $ret = $matches[1];
        }

        return $ret;
    }
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
