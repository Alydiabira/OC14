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

    public function findAll(): array
    {
        return $this->createQueryBuilder('v')
            ->leftJoin('v.tags', 't')
            ->addSelect('t')
            ->getQuery()
            ->getResult();
    }

    public function getVideoGames(Pagination $pagination, Filter $filter): Paginator
    {
        // Tri conforme aux tests OC
        $orderField = match ($pagination->getSorting()->name) {
            'Title' => 'vg.title',
            'ReleaseDate' => 'vg.releaseDate',
            'Rating' => 'vg.rating',
            'AverageRating' => 'vg.averageRating',
            default => 'vg.id',
        };

        $qb = $this->createQueryBuilder('vg')
            ->addSelect('t')
            ->leftJoin('vg.tags', 't')
            ->orderBy($orderField, $pagination->getDirection()->getSql())
            ->setFirstResult($pagination->getOffset())
            ->setMaxResults($pagination->getLimit());

        // Filtre recherche
        if ($filter->getSearch() !== null) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('vg.title', ':search'),
                    $qb->expr()->like('vg.description', ':search'),
                    $qb->expr()->like('vg.test', ':search')
                )
            )
                ->setParameter('search', '%' . $filter->getSearch() . '%');
        }

        // Filtre tags
        if ([] !== $filter->getTags()) {
            $tagIds = array_map(fn(Tag $t) => $t->getId(), $filter->getTags());

            $subQuery = $this->getEntityManager()->createQueryBuilder()
                ->select('vg2.id')
                ->from(VideoGame::class, 'vg2')
                ->join('vg2.tags', 't2')
                ->where('t2.id IN (:tags)')
                ->groupBy('vg2.id')
                ->having('COUNT(DISTINCT t2.id) = :tagCount')
                ->getDQL();

            $qb->andWhere('vg.id IN (' . $subQuery . ')')
                ->setParameter('tags', $tagIds)
                ->setParameter('tagCount', count($tagIds));

            // Pagination après filtrage
            $qb->setMaxResults($pagination->getLimit());
        }

        return new Paginator($qb, fetchJoinCollection: true);
    }
}
