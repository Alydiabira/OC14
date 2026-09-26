<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Secrets;

use Symfony\Component\DependencyInjection\EnvVarLoaderInterface;
use Symfony\Component\String\LazyString;
use Symfony\Component\VarExporter\VarExporter;

/**
 * @author Tobias Schultze <http://tobion.de>
 * @author Jérémy Derussé <jeremy@derusse.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SodiumVault extends AbstractVault implements EnvVarLoaderInterface
{
    private ?string $encryptionKey = null;
    private string|\Stringable|null $decryptionKey = null;
    private string $pathPrefix;
    private ?string $secretsDir;

    /**
     * @param $decryptionKey A string or a stringable object that defines the private key to use to decrypt the vault
     *                       or null to store generated keys in the provided $secretsDir
     */
    public function __construct(string $secretsDir, #[\SensitiveParameter] string|\Stringable|null $decryptionKey = null)
    {
        $this->pathPrefix = rtrim(strtr($secretsDir, '/', \DIRECTORY_SEPARATOR), \DIRECTORY_SEPARATOR).\DIRECTORY_SEPARATOR.basename($secretsDir).'.';
        $this->decryptionKey = $decryptionKey;
        $this->secretsDir = $secretsDir;
    }

    public function generateKeys(bool $override = false): bool
    {
        $this->lastMessage = null;

        if (null === $this->encryptionKey && '' !== $this->decryptionKey = (string) $this->decryptionKey) {
            $this->lastMessage = 'Cannot generate keys when a decryption key has been provided while instantiating the vault.';

            return false;
        }

        try {
            $this->loadKeys();
        } catch (\RuntimeException) {
            // ignore failures to load keys
        }

        if ('' !== $this->decryptionKey && !is_file($this->pathPrefix.'encrypt.public.php')) {
            $this->export('encrypt.public', $this->encryptionKey);
        }

        if (!$override && null !== $this->encryptionKey) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Sodium keys already exist at "%s*.{public,private}" and won\'t be overridden.', $this->getPrettyPath($this->pathPrefix));
=======
            $this->lastMessage = \sprintf('Sodium keys already exist at "%s*.{public,private}" and won\'t be overridden.', $this->getPrettyPath($this->pathPrefix));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return false;
        }

        $this->decryptionKey = sodium_crypto_box_keypair();
        $this->encryptionKey = sodium_crypto_box_publickey($this->decryptionKey);

        $this->export('encrypt.public', $this->encryptionKey);
        $this->export('decrypt.private', $this->decryptionKey);

<<<<<<< HEAD
        $this->lastMessage = sprintf('Sodium keys have been generated at "%s*.public/private.php".', $this->getPrettyPath($this->pathPrefix));
=======
        $this->lastMessage = \sprintf('Sodium keys have been generated at "%s*.public/private.php".', $this->getPrettyPath($this->pathPrefix));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return true;
    }

    public function seal(string $name, string $value): void
    {
        $this->lastMessage = null;
        $this->validateName($name);
        $this->loadKeys();
        $filename = $this->getFilename($name);
        $this->export($filename, sodium_crypto_box_seal($value, $this->encryptionKey ?? sodium_crypto_box_publickey($this->decryptionKey)));

        $list = $this->list();
        $list[$name] = null;
        uksort($list, 'strnatcmp');
<<<<<<< HEAD
        file_put_contents($this->pathPrefix.'list.php', sprintf("<?php\n\nreturn %s;\n", VarExporter::export($list)), \LOCK_EX);

        $this->lastMessage = sprintf('Secret "%s" encrypted in "%s"; you can commit it.', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
        file_put_contents($this->pathPrefix.'list.php', \sprintf("<?php\n\nreturn %s;\n", VarExporter::export($list)), \LOCK_EX);

        $this->lastMessage = \sprintf('Secret "%s" encrypted in "%s"; you can commit it.', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    public function reveal(string $name): ?string
    {
        $this->lastMessage = null;
        $this->validateName($name);

        $filename = $this->getFilename($name);
        if (!is_file($file = $this->pathPrefix.$filename.'.php')) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Secret "%s" not found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
            $this->lastMessage = \sprintf('Secret "%s" not found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return null;
        }

        if (!\function_exists('sodium_crypto_box_seal')) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Secret "%s" cannot be revealed as the "sodium" PHP extension missing. Try running "composer require paragonie/sodium_compat" if you cannot enable the extension."', $name);
=======
            $this->lastMessage = \sprintf('Secret "%s" cannot be revealed as the "sodium" PHP extension missing. Try running "composer require paragonie/sodium_compat" if you cannot enable the extension."', $name);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return null;
        }

        $this->loadKeys();

        if ('' === $this->decryptionKey) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Secret "%s" cannot be revealed as no decryption key was found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
            $this->lastMessage = \sprintf('Secret "%s" cannot be revealed as no decryption key was found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return null;
        }

        if (false === $value = sodium_crypto_box_seal_open(include $file, $this->decryptionKey)) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Secret "%s" cannot be revealed as the wrong decryption key was provided for "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
            $this->lastMessage = \sprintf('Secret "%s" cannot be revealed as the wrong decryption key was provided for "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return null;
        }

        return $value;
    }

    public function remove(string $name): bool
    {
        $this->lastMessage = null;
        $this->validateName($name);

        $filename = $this->getFilename($name);
        if (!is_file($file = $this->pathPrefix.$filename.'.php')) {
<<<<<<< HEAD
            $this->lastMessage = sprintf('Secret "%s" not found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
            $this->lastMessage = \sprintf('Secret "%s" not found in "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

            return false;
        }

        $list = $this->list();
        unset($list[$name]);
<<<<<<< HEAD
        file_put_contents($this->pathPrefix.'list.php', sprintf("<?php\n\nreturn %s;\n", VarExporter::export($list)), \LOCK_EX);

        $this->lastMessage = sprintf('Secret "%s" removed from "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
=======
        file_put_contents($this->pathPrefix.'list.php', \sprintf("<?php\n\nreturn %s;\n", VarExporter::export($list)), \LOCK_EX);

        $this->lastMessage = \sprintf('Secret "%s" removed from "%s".', $name, $this->getPrettyPath(\dirname($this->pathPrefix).\DIRECTORY_SEPARATOR));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        return @unlink($file) || !file_exists($file);
    }

    public function list(bool $reveal = false): array
    {
        $this->lastMessage = null;

        if (!is_file($file = $this->pathPrefix.'list.php')) {
            return [];
        }

        $secrets = include $file;

        if (!$reveal) {
            return $secrets;
        }

        foreach ($secrets as $name => $value) {
            $secrets[$name] = $this->reveal($name);
        }

        return $secrets;
    }

    public function loadEnvVars(): array
    {
        $envs = [];
        $reveal = $this->reveal(...);

        foreach ($this->list() as $name => $value) {
            $envs[$name] = LazyString::fromCallable($reveal, $name);
        }

        return $envs;
    }

    private function loadKeys(): void
    {
        if (!\function_exists('sodium_crypto_box_seal')) {
            throw new \LogicException('The "sodium" PHP extension is required to deal with secrets. Alternatively, try running "composer require paragonie/sodium_compat" if you cannot enable the extension.".');
        }

        if (null !== $this->encryptionKey || '' !== $this->decryptionKey = (string) $this->decryptionKey) {
            return;
        }

        if (is_file($this->pathPrefix.'decrypt.private.php')) {
            $this->decryptionKey = (string) include $this->pathPrefix.'decrypt.private.php';
        }

        if (is_file($this->pathPrefix.'encrypt.public.php')) {
            $this->encryptionKey = (string) include $this->pathPrefix.'encrypt.public.php';
        } elseif ('' !== $this->decryptionKey) {
            $this->encryptionKey = sodium_crypto_box_publickey($this->decryptionKey);
        } else {
<<<<<<< HEAD
            throw new \RuntimeException(sprintf('Encryption key not found in "%s".', \dirname($this->pathPrefix)));
=======
            throw new \RuntimeException(\sprintf('Encryption key not found in "%s".', \dirname($this->pathPrefix)));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    private function export(string $filename, string $data): void
    {
        $b64 = 'decrypt.private' === $filename ? '// SYMFONY_DECRYPTION_SECRET='.base64_encode($data)."\n" : '';
        $name = basename($this->pathPrefix.$filename);
        $data = str_replace('%', '\x', rawurlencode($data));
<<<<<<< HEAD
        $data = sprintf("<?php // %s on %s\n\n%sreturn \"%s\";\n", $name, date('r'), $b64, $data);
=======
        $data = \sprintf("<?php // %s on %s\n\n%sreturn \"%s\";\n", $name, date('r'), $b64, $data);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $this->createSecretsDir();

        if (false === file_put_contents($this->pathPrefix.$filename.'.php', $data, \LOCK_EX)) {
            $e = error_get_last();
            throw new \ErrorException($e['message'] ?? 'Failed to write secrets data.', 0, $e['type'] ?? \E_USER_WARNING);
        }
    }

    private function createSecretsDir(): void
    {
<<<<<<< HEAD
        if ($this->secretsDir && !is_dir($this->secretsDir) && !@mkdir($this->secretsDir, 0777, true) && !is_dir($this->secretsDir)) {
            throw new \RuntimeException(sprintf('Unable to create the secrets directory (%s).', $this->secretsDir));
=======
        if ($this->secretsDir && !is_dir($this->secretsDir) && !@mkdir($this->secretsDir, 0o777, true) && !is_dir($this->secretsDir)) {
            throw new \RuntimeException(\sprintf('Unable to create the secrets directory (%s).', $this->secretsDir));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        $this->secretsDir = null;
    }

    private function getFilename(string $name): string
    {
        // The MD5 hash allows making secrets case-sensitive. The filename is not enough on Windows.
        return $name.'.'.substr(md5($name), 0, 6);
    }
}
