<?php

declare(strict_types=1);

namespace App\Tests\Functional\VideoGame;

use App\Tests\Functional\FunctionalTestCase;
use Symfony\Component\HttpFoundation\Response;

final class ShowTest extends FunctionalTestCase
{
    public function testShouldShowVideoGame(): void
    {
        $this->get('/jeu-video-0');
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('h1', 'Jeu vidéo 0');
    }
<<<<<<< HEAD

    public function testShouldPostReview(): void
    {
        $this->login();
        $this->get('/jeu-video-49');
        self::assertResponseIsSuccessful();
        $this->submit(
            'Poster',
            [
                'review[rating]' => 4,
                'review[comment]' => 'Mon commentaire',
            ]
        );
        self::assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $this->client->followRedirect();
        self::assertSelectorTextContains('div.list-group-item:last-child h3', 'user+0');
        self::assertSelectorTextContains('div.list-group-item:last-child p', 'Mon commentaire');
        self::assertSelectorTextContains('div.list-group-item:last-child span.value', '4');
    }
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
