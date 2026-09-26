<?php

declare(strict_types=1);

namespace App\Tests\Functional\Auth;

use App\Tests\Functional\FunctionalTestCase;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

final class LoginTest extends FunctionalTestCase
{
    public function testThatLoginShouldSucceeded(): void
    {
        $this->get('/auth/login');

<<<<<<< HEAD
        $this->submit('Se connecter', [
=======
        $this->client->submitForm('Se connecter', [
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'email' => 'user+1@email.com',
            'password' => 'password'
        ]);

        $authorizationChecker = $this->service(AuthorizationCheckerInterface::class);

        self::assertTrue($authorizationChecker->isGranted('IS_AUTHENTICATED'));

        $this->get('/auth/logout');

        self::assertFalse($authorizationChecker->isGranted('IS_AUTHENTICATED'));
    }

    public function testThatLoginShouldFailed(): void
    {
        $this->get('/auth/login');

<<<<<<< HEAD
        $this->submit('Se connecter', [
=======
        $this->client->submitForm('Se connecter', [
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            'email' => 'user+1@email.com',
            'password' => 'fail'
        ]);

        $authorizationChecker = $this->service(AuthorizationCheckerInterface::class);

        self::assertFalse($authorizationChecker->isGranted('IS_AUTHENTICATED'));
    }
}
