<?php

declare(strict_types=1);

namespace App\Doctrine\Repository;

use App\List\VideoGameList\Filter;
use App\List\VideoGameList\Pagination;
use App\Model\Entity\VideoGame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VideoGame>
 */
final class VideoGameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoGame::class);
    }

    /**
     * @return Paginator<VideoGame>
     */
    public function getVideoGames(Pagination $pagination, Filter $filter): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('vg')
            ->setFirstResult($pagination->getOffset())
            ->setMaxResults($pagination->getLimit())
            ->orderBy(
                $pagination->getSorting()->getSql(),
                $pagination->getDirection()->getSql()
            );

        if (null !== $filter->getSearch()) {
            $queryBuilder
                ->andWhere(
                    $queryBuilder->expr()->orX(
                        $queryBuilder->expr()->like('vg.title', ':search'),
                        $queryBuilder->expr()->like('vg.description', ':search')
                    )
                )
                ->setParameter(
                    'search',
                    '%'.$filter->getSearch().'%'
                );
        }

        if ([] !== $filter->getTags()) {
            $connection = $this->getEntityManager()->getConnection();
            $matchingVideoGameIds = null;

            foreach ($filter->getTags() as $tag) {
                $videoGameIds = $connection->fetchFirstColumn(
                    'SELECT video_game_id FROM video_game_tags WHERE tag_id = ?',
                    [$tag->getId()]
                );

                $matchingVideoGameIds = null === $matchingVideoGameIds
                    ? $videoGameIds
                    : array_values(array_intersect($matchingVideoGameIds, $videoGameIds));
            }

            $queryBuilder
                ->andWhere($queryBuilder->expr()->in('vg.id', ':taggedVideoGameIds'))
                ->setParameter(
                    'taggedVideoGameIds',
                    [] !== $matchingVideoGameIds ? $matchingVideoGameIds : [0]
                );
        }

        return new Paginator(
            $queryBuilder,
            true
        );
    }
}
