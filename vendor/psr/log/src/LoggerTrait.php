<?php

namespace Psr\Log;

/**
 * This is a simple Logger trait that classes unable to extend AbstractLogger
 * (because they extend another class, etc) can include.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
trait LoggerTrait
{
    /**
     * System is unusable.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function emergency(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function alert(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function critical(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function error(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function warning(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    /**
     * Normal but significant events.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function notice(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function info(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    /**
     * Detailed debug information.
<<<<<<< HEAD
     *
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function debug(string|\Stringable $message, array $context = []): void
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    /**
     * Logs with an arbitrary level.
     *
<<<<<<< HEAD
     * @param mixed  $level
     * @param string|\Stringable $message
     * @param array  $context
     *
     * @return void
=======
     * @param mixed $level
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    abstract public function log($level, string|\Stringable $message, array $context = []): void;
}
