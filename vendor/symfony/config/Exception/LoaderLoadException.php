<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Exception;

/**
 * Exception class for when a resource cannot be loaded or imported.
 *
 * @author Ryan Weaver <ryan@thatsquality.com>
 */
class LoaderLoadException extends \Exception
{
    /**
     * @param mixed           $resource       The resource that could not be imported
     * @param string|null     $sourceResource The original resource importing the new resource
     * @param int             $code           The error code
     * @param \Throwable|null $previous       A previous exception
     * @param string|null     $type           The type of resource
     */
    public function __construct(mixed $resource, ?string $sourceResource = null, int $code = 0, ?\Throwable $previous = null, ?string $type = null)
    {
        if (!\is_string($resource)) {
            try {
                $resource = json_encode($resource, \JSON_THROW_ON_ERROR);
            } catch (\JsonException) {
<<<<<<< HEAD
                $resource = sprintf('resource of type "%s"', get_debug_type($resource));
=======
                $resource = \sprintf('resource of type "%s"', get_debug_type($resource));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
        }

        $message = '';
        if ($previous) {
            // Include the previous exception, to help the user see what might be the underlying cause

            // Trim the trailing period of the previous message. We only want 1 period remove so no rtrim...
            if (str_ends_with($previous->getMessage(), '.')) {
                $trimmedMessage = substr($previous->getMessage(), 0, -1);
<<<<<<< HEAD
                $message .= sprintf('%s', $trimmedMessage).' in ';
            } else {
                $message .= sprintf('%s', $previous->getMessage()).' in ';
=======
                $message .= \sprintf('%s', $trimmedMessage).' in ';
            } else {
                $message .= \sprintf('%s', $previous->getMessage()).' in ';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
            $message .= $resource.' ';

            // show tweaked trace to complete the human readable sentence
            if (null === $sourceResource) {
<<<<<<< HEAD
                $message .= sprintf('(which is loaded in resource "%s")', $resource);
            } else {
                $message .= sprintf('(which is being imported from "%s")', $sourceResource);
=======
                $message .= \sprintf('(which is loaded in resource "%s")', $resource);
            } else {
                $message .= \sprintf('(which is being imported from "%s")', $sourceResource);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            }
            $message .= '.';

        // if there's no previous message, present it the default way
        } elseif (null === $sourceResource) {
<<<<<<< HEAD
            $message .= sprintf('Cannot load resource "%s".', $resource);
        } else {
            $message .= sprintf('Cannot import resource "%s" from "%s".', $resource, $sourceResource);
=======
            $message .= \sprintf('Cannot load resource "%s".', $resource);
        } else {
            $message .= \sprintf('Cannot import resource "%s" from "%s".', $resource, $sourceResource);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // Is the resource located inside a bundle?
        if ('@' === $resource[0]) {
            $parts = explode(\DIRECTORY_SEPARATOR, $resource);
            $bundle = substr($parts[0], 1);
<<<<<<< HEAD
            $message .= sprintf(' Make sure the "%s" bundle is correctly registered and loaded in the application kernel class.', $bundle);
            $message .= sprintf(' If the bundle is registered, make sure the bundle path "%s" is not empty.', $resource);
        } elseif (null !== $type) {
            $message .= sprintf(' Make sure there is a loader supporting the "%s" type.', $type);
=======
            $message .= \sprintf(' Make sure the "%s" bundle is correctly registered and loaded in the application kernel class.', $bundle);
            $message .= \sprintf(' If the bundle is registered, make sure the bundle path "%s" is not empty.', $resource);
        } elseif (null !== $type) {
            $message .= \sprintf(' Make sure there is a loader supporting the "%s" type.', $type);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    protected function varToString(mixed $var)
    {
        if (\is_object($var)) {
<<<<<<< HEAD
            return sprintf('Object(%s)', $var::class);
=======
            return \sprintf('Object(%s)', $var::class);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if (\is_array($var)) {
            $a = [];
            foreach ($var as $k => $v) {
<<<<<<< HEAD
                $a[] = sprintf('%s => %s', $k, $this->varToString($v));
            }

            return sprintf('Array(%s)', implode(', ', $a));
        }

        if (\is_resource($var)) {
            return sprintf('Resource(%s)', get_resource_type($var));
=======
                $a[] = \sprintf('%s => %s', $k, $this->varToString($v));
            }

            return \sprintf('Array(%s)', implode(', ', $a));
        }

        if (\is_resource($var)) {
            return \sprintf('Resource(%s)', get_resource_type($var));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        if (null === $var) {
            return 'null';
        }

        if (false === $var) {
            return 'false';
        }

        if (true === $var) {
            return 'true';
        }

        return (string) $var;
    }
}
