<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
<<<<<<< HEAD
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\Translation\Dumper\XliffFileDumper;
use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\Provider\ProviderInterface;
=======
use Psr\Log\NullLogger;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\Translation\Dumper\XliffFileDumper;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\Provider\ProviderInterface;
use Symfony\Component\Translation\TranslatorBag;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Symfony\Component\Translation\TranslatorBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * A test case to ease testing a translation provider.
 *
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
abstract class ProviderTestCase extends TestCase
{
    protected HttpClientInterface $client;
    protected LoggerInterface|MockObject $logger;
    protected string $defaultLocale;
    protected LoaderInterface|MockObject $loader;
    protected XliffFileDumper|MockObject $xliffFileDumper;
    protected TranslatorBagInterface|MockObject $translatorBag;

    abstract public static function createProvider(HttpClientInterface $client, LoaderInterface $loader, LoggerInterface $logger, string $defaultLocale, string $endpoint): ProviderInterface;

    /**
     * @return iterable<array{0: ProviderInterface, 1: string}>
     */
    abstract public static function toStringProvider(): iterable;

    /**
     * @dataProvider toStringProvider
     */
    public function testToString(ProviderInterface $provider, string $expected)
    {
        $this->assertSame($expected, (string) $provider);
    }

    protected function getClient(): MockHttpClient
    {
        return $this->client ??= new MockHttpClient();
    }

    protected function getLoader(): LoaderInterface
    {
<<<<<<< HEAD
        return $this->loader ??= $this->createMock(LoaderInterface::class);
=======
        return $this->loader ??= new ArrayLoader();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function getLogger(): LoggerInterface
    {
<<<<<<< HEAD
        return $this->logger ??= $this->createMock(LoggerInterface::class);
=======
        return $this->logger ??= new NullLogger();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function getDefaultLocale(): string
    {
        return $this->defaultLocale ??= 'en';
    }

    protected function getXliffFileDumper(): XliffFileDumper
    {
<<<<<<< HEAD
        return $this->xliffFileDumper ??= $this->createMock(XliffFileDumper::class);
=======
        return $this->xliffFileDumper ??= new XliffFileDumper();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }

    protected function getTranslatorBag(): TranslatorBagInterface
    {
<<<<<<< HEAD
        return $this->translatorBag ??= $this->createMock(TranslatorBagInterface::class);
=======
        return $this->translatorBag ??= new TranslatorBag();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    }
}
