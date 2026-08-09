<?php

declare(strict_types=1);

namespace App\Tests\Functional\Auth;

use App\Tests\Functional\FunctionalTestCase;

final class RegisterTest extends FunctionalTestCase
{
    public function testThatRegistrationShouldSucceeded(): void
    {
        $crawler = $this->client->request('GET', '/auth/register');

        $form = $crawler->filter('form')->form();

        $this->client->submit($form, [
            'register[username]' => 'newuser',
            'register[email]' => 'newuser@example.com',
            'register[plainPassword]' => 'SuperPassword123!',
        ]);

        self::assertResponseRedirects('/auth/login');
    }

    /**
     * @dataProvider provideInvalidRegistrationData
     */
    public function testThatRegistrationShouldFailed(array $data): void
    {
        $crawler = $this->client->request('GET', '/auth/register');

        $form = $crawler->filter('form')->form();

        $this->client->submit($form, [
            'register[username]' => $data[0],
            'register[email]' => $data[1],
            'register[plainPassword]' => $data[2],
        ]);

        self::assertResponseStatusCodeSame(422);
    }

    public function provideInvalidRegistrationData(): iterable
    {
        yield 'empty username' => [['', 'email@example.com', 'SuperPassword123!']];
        yield 'non unique username' => [['user+1', 'email2@example.com', 'SuperPassword123!']];
        yield 'too long username' => [[str_repeat('a', 60), 'email3@example.com', 'SuperPassword123!']];
        yield 'empty email' => [['username', '', 'SuperPassword123!']];
        yield 'invalid email' => [['username', 'fail', 'SuperPassword123!']];
    }
}
