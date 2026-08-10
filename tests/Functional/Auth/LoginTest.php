<?php

declare(strict_types=1);

namespace App\Tests\Functional\Auth;

use App\Tests\Functional\FunctionalTestCase;

final class LoginTest extends FunctionalTestCase
{
    public function testThatLoginShouldSucceeded(): void
    {
        $crawler = $this->client->request('GET', '/auth/login');

        $form = $crawler->filter('form')->form();

        $this->client->submit($form, [
            'email' => 'user+1@example.com',
            'password' => 'password',
        ]);

        self::assertResponseRedirects('/');
    }

    public function testThatLoginShouldFailed(): void
    {
        $crawler = $this->client->request('GET', '/auth/login');

        $form = $crawler->filter('form')->form();

        $this->client->submit($form, [
            'email' => 'wrong@example.com',
            'password' => 'wrong',
        ]);

        self::assertResponseStatusCodeSame(422);
    }
}
