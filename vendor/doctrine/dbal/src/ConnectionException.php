<?php

namespace Doctrine\DBAL;

<<<<<<< HEAD
/** @psalm-immutable */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
class ConnectionException extends Exception
{
    /** @return ConnectionException */
    public static function commitFailedRollbackOnly()
    {
        return new self('Transaction commit failed because the transaction has been marked for rollback only.');
    }

    /** @return ConnectionException */
    public static function noActiveTransaction()
    {
        return new self('There is no active transaction.');
    }

    /** @return ConnectionException */
    public static function savepointsNotSupported()
    {
        return new self('Savepoints are not supported by this driver.');
    }

    /** @return ConnectionException */
    public static function mayNotAlterNestedTransactionWithSavepointsInTransaction()
    {
        return new self('May not alter the nested transaction with savepoints behavior while a transaction is open.');
    }
}
