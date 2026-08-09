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
            'username' => 'user+1',
            'password' => 'password',
        ]);

        self::assertResponseRedirects('/');
    }

    public function testThatLoginShouldFailed(): void
    {
        $crawler = $this->client->request('GET', '/auth/login');

        $form = $crawler->filter('form')->form();

        $this->client->submit($form, [
            'username' => 'wrong',
            'password' => 'wrong',
        ]);

        self::assertResponseStatusCodeSame(422);
    }
}
