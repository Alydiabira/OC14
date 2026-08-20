<?php

declare(strict_types=1);

namespace App\Tests\Functional\VideoGame;

use App\Tests\Functional\FunctionalTestCase;

final class FilterTest extends FunctionalTestCase
{
    /**
     * @dataProvider provideUseCases
     */
    public function testShouldShowVideoGamesByUseCase(
        array $query,
        int $expectedCount,
        int $expectedOffsetFrom,
        int $expectedOffsetTo,
        int $expectedTotal,
        ?int $expectedPage,
        array $expectedPaginationLinks,
        array $expectedVideoGames
    ): void {
        $this->get('/video-games', $query);
        self::assertResponseIsSuccessful();

        self::assertSelectorCount($expectedCount, 'article.game-card');

        self::assertSelectorTextSame(
            'div.list-info',
            sprintf(
                'Affiche %d jeux vidéo de %d à %d sur les %d jeux vidéo',
                $expectedCount,
                $expectedOffsetFrom,
                $expectedOffsetTo,
                $expectedTotal
            )
        );

        if ($expectedPage === null) {
            self::assertSelectorNotExists('nav[aria-label="Pagination"]');
        } else {
            self::assertSelectorTextSame('li.page-item.active', (string) $expectedPage);
            self::assertSelectorCount(count($expectedPaginationLinks), 'li.page-item');

            foreach ($expectedPaginationLinks as $expectedPaginationLink) {
                self::assertSelectorExists(sprintf('li.page-item[aria-label="%s"]', $expectedPaginationLink));
            }
        }

        foreach (array_values($expectedVideoGames) as $index => $expectedVideoGame) {
            self::assertSelectorTextSame(
                sprintf('article.game-card:nth-child(%d) h2.game-card-title a', $index + 1),
                $expectedVideoGame
            );
        }
    }

    public function testShouldSortVideoGames(): void
    {
        $this->get('/video-games');
        self::assertResponseIsSuccessful();

        self::assertSelectorCount(10, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 0');
        self::assertSelectorTextSame('article.game-card:nth-child(10) h2.game-card-title a', 'Jeu vidéo 9');

        $this->submit('Trier', [
            'limit' => 25,
            'sorting' => 'Title',
            'direction' => 'Ascending'
        ], 'GET');

        self::assertResponseIsSuccessful();
        self::assertSelectorCount(25, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 0');
        self::assertSelectorTextSame('article.game-card:nth-child(25) h2.game-card-title a', 'Jeu vidéo 30');
    }

    public function testShouldFilterBySearchVideoGames(): void
    {
        $this->get('/video-games');
        self::assertResponseIsSuccessful();

        self::assertSelectorCount(10, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 0');
        self::assertSelectorTextSame('article.game-card:nth-child(10) h2.game-card-title a', 'Jeu vidéo 9');

        $this->submit('Filtrer', ['filter[search]' => 'Jeu vidéo 49'], 'GET');

        self::assertResponseIsSuccessful();
        self::assertSelectorCount(1, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 49');
    }

    public function testShouldFilterByTagsVideoGames(): void
    {
        $this->get('/video-games');
        self::assertResponseIsSuccessful();

        self::assertSelectorCount(10, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 0');
        self::assertSelectorTextSame('article.game-card:nth-child(10) h2.game-card-title a', 'Jeu vidéo 9');

        $this->submit(
            'Filtrer',
            [
                'filter[tags][0]' => '1',
                'filter[tags][1]' => '2',
                'filter[tags][2]' => '3',
                'filter[tags][3]' => '4',
                'filter[tags][4]' => '5',
            ],
            'GET'
        );

        self::assertResponseIsSuccessful();
        self::assertSelectorCount(2, 'article.game-card');
        self::assertSelectorTextSame('article.game-card:nth-child(1) h2.game-card-title a', 'Jeu vidéo 0');
        self::assertSelectorTextSame('article.game-card:nth-child(2) h2.game-card-title a', 'Jeu vidéo 25');
    }

    /**
     * @return iterable<string, array{
     *     query: array<string, mixed>,
     *     expectedCount: int,
     *     expectedOffsetFrom: int,
     *     expectedOffsetTo: int,
     *     expectedTotal: int,
     *     expectedPage: ?int,
     *     expectedPaginationLinks: string[],
     *     expectedVideoGames: string[]
     * }>
     */
    public static function provideUseCases(): iterable
    {
        return require __DIR__ . '/../../fixtures/filter_use_cases.php';
    }
}
