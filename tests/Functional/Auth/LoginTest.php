<?php

declare(strict_types=1);

namespace App\Tests\Functional\Auth;

use App\Tests\Functional\FunctionalTestCase;

final class LoginTest extends FunctionalTestCase
{
    public function testThatLoginShouldSucceeded(): void
    {
        $this->client->request('GET', '/auth/login');

        $this->client->submitForm('Se connecter', [
            'email' => 'user+1@example.com',
            'password' => 'password',
        ]);;

        self::assertResponseRedirects('/');
    }

    public function testThatLoginShouldFailed(): void
    {
        $this->client->request('GET', '/auth/login');

        $this->client->submitForm('Se connecter', [
            'email' => 'wrong@example.com',
            'password' => 'wrong',
        ]);

        self::assertResponseStatusCodeSame(422);
    }
}
