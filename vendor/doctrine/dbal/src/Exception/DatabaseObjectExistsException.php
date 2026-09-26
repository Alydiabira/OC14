<?php

namespace Doctrine\DBAL\Exception;

/**
 * Base class for all already existing database object related errors detected in the driver.
 *
 * A database object is considered any asset that can be created in a database
 * such as schemas, tables, views, sequences, triggers,  constraints, indexes,
 * functions, stored procedures etc.
<<<<<<< HEAD
 *
 * @psalm-immutable
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class DatabaseObjectExistsException extends ServerException
{
}
