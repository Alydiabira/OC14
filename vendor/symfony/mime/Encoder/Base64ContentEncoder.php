<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Encoder;

use Symfony\Component\Mime\Exception\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream($stream, int $maxLineLength = 0): iterable
    {
        if (!\is_resource($stream)) {
<<<<<<< HEAD
            throw new \TypeError(sprintf('Method "%s" takes a stream as a first argument.', __METHOD__));
=======
            throw new \TypeError(\sprintf('Method "%s" takes a stream as a first argument.', __METHOD__));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $filter = stream_filter_append($stream, 'convert.base64-encode', \STREAM_FILTER_READ, [
            'line-length' => 0 >= $maxLineLength || 76 < $maxLineLength ? 76 : $maxLineLength,
            'line-break-chars' => "\r\n",
        ]);
        if (!\is_resource($filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        while (!feof($stream)) {
            yield fread($stream, 16372);
        }
        stream_filter_remove($filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
