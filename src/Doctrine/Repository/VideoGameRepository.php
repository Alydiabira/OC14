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
            ->leftJoin('vg.tags', 't')
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
                    '%' . $filter->getSearch() . '%'
                );
        }

        if ([] !== $filter->getTags()) {
            $tagIds = array_map(
                static fn($tag): ?int => $tag->getId(),
                $filter->getTags()
            );

            $queryBuilder
                ->andWhere('t.id IN (:tags)')
                ->setParameter('tags', $tagIds)
                ->groupBy('vg.id')
                ->having('COUNT(DISTINCT t.id) = :tagCount')
                ->setParameter('tagCount', count($tagIds));
        }

        return new Paginator(
            $queryBuilder,
            false
        );
    }
}
