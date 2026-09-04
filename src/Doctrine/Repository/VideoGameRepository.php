<?php

declare(strict_types=1);

namespace App\Doctrine\Repository;

use App\List\VideoGameList\Filter;
use App\List\VideoGameList\Pagination;
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

        if ($filter->getSearch()) {
            $qb->andWhere('vg.title LIKE :search')
                ->setParameter('search', '%' . $filter->getSearch() . '%');
        }

        if (!empty($filter->getTags())) {
            foreach ($filter->getTags() as $index => $tag) {
                $qb->andWhere(":tag$index MEMBER OF vg.tags")
                    ->setParameter("tag$index", $tag);
            }
        }

        $qb->orderBy(
            'vg.' . $pagination->getSorting()->toSql(),
            $pagination->getDirection()->toSql()
        );

        $qb->setFirstResult($pagination->getOffset())
            ->setMaxResults($pagination->getLimit());

        return new Paginator($qb->getQuery());
    }
}
