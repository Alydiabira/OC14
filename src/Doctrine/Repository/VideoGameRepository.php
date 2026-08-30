<?php

declare(strict_types=1);

namespace App\Doctrine\Repository;

use App\List\VideoGameList\Filter;
use App\List\VideoGameList\Pagination;
use App\Model\Entity\Tag;
use App\Model\Entity\VideoGame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

final class VideoGameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoGame::class);
    }

    public function getVideoGames(Pagination $pagination, Filter $filter): Paginator
    {
        $qb = $this->createQueryBuilder('vg');

        // --- Search ---
        if ($filter->getSearch()) {
            $qb->andWhere('vg.title LIKE :search')
                ->setParameter('search', '%' . $filter->getSearch() . '%');
        }

        // --- Tags ---
        if (!empty($filter->getTags())) {
            $qb->join('vg.tags', 't')
                ->andWhere('t.id IN (:tags)')
                ->setParameter('tags', array_map(fn($tag) => $tag->getId(), $filter->getTags()));
        }

        // --- Sorting ---
        $qb->orderBy(
            $pagination->getSorting()->toSql(),
            $pagination->getDirection()->toSql()
        );

        // --- Pagination ---
        $qb->setFirstResult($pagination->getOffset())
            ->setMaxResults($pagination->getLimit());

        return new Paginator($qb->getQuery());
    }
}
