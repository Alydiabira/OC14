<?php

declare(strict_types=1);

namespace App\Tests\Functional;

final class SmokeTest extends FunctionalTestCase
{
    /**
     * @dataProvider provideUrls
     */
    public function testShouldTestUri(string $method, string $uri): void
    {
        $this->client->request($method, $uri);

        self::assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * @return iterable<int, array{string, string}>
     */
    public function provideUrls(): iterable
    {
        yield ['GET', '/'];
        yield ['GET', '/video-games/jeu-video-0'];
        yield ['POST', '/video-games/jeu-video-0'];
        yield ['GET', '/auth/login'];
        yield ['POST', '/auth/login'];
        yield ['GET', '/auth/register'];
        yield ['POST', '/auth/register'];
    }
}
