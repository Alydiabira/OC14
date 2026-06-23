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
            'username' => 'user+1',
            'password' => 'password',
        ]);

        self::assertResponseRedirects('/');
    }

    public function testThatLoginShouldFailed(): void
    {
        $this->client->request('GET', '/auth/login');

        $this->client->submitForm('Se connecter', [
            'username' => 'wrong',
            'password' => 'wrong',
        ]);

        self::assertResponseStatusCodeSame(422);
    }
}
