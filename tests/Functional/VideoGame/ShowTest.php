<?php

declare(strict_types=1);

namespace App\Tests\Functional\VideoGame;

use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
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

    public function testShouldPostReview(): void
    {
        $videoGame = $this->getEntityManager()
            ->getRepository(VideoGame::class)
            ->findOneBy(['slug' => 'jeu-video-49']);
        self::assertNotNull($videoGame);

        $reviewingUser = null;
        foreach ($this->getEntityManager()->getRepository(User::class)->findAll() as $user) {
            if (!$videoGame->hasAlreadyReview($user)) {
                $reviewingUser = $user;
                break;
            }
        }
        self::assertNotNull($reviewingUser);

        $this->login($reviewingUser->getEmail());
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
        self::assertSelectorTextContains(
            'div.list-group-item:last-child h3',
            $reviewingUser->getUsername()
        );
        self::assertSelectorTextContains('div.list-group-item:last-child p', 'Mon commentaire');
        self::assertSelectorTextContains('div.list-group-item:last-child span.value', '4');
    }
}
